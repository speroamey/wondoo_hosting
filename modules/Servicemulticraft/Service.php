<?php
/**
 *
 *   Copyright © 2010-2024 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

namespace Box\Mod\Servicemulticraft;

use FOSSBilling\InjectionAwareInterface;

class Service implements InjectionAwareInterface
{
    /* How many times to retry deleteServer */
    var $retryTimes = 10;
    /* This will be set as the password value when no new panel user is created.
       This is to prevent generating a new password that is never used since the
       user might already have changed the password in the panel and we don't
       override an existing password. */
    var $existingPassword = 'Your existing panel password';

    var $logEnabled = true;
    var $logApi = false;
    var $logVerbose = false;

    //Internal
    var $api;
    var $clientData = array();
    var $server = array(
        'name'=>null,
        'ip'=>null,
        'port'=>null,
        'dir'=>null,
        'world'=>null,
        'players'=>null,
        'memory'=>null,
        'start_memory'=>null,
        'jarfile'=>null,
        'autostart'=>null,
        'default_level'=>null,
        'daemon_id'=>null,
        'announce_save'=>null,
        'kick_delay'=>null,
        'suspended'=>null,
        'autosave'=>null,
        'jardir'=>null,
        'template'=>null,
        'setup'=>null,
        'prev_jarfile'=>null,
        'params'=>null,
        'crash_check'=>null,
        'disk_quota'=>null,
    );
    var $serverConfig = array(
        'ip_auth_role'=>null,
        'give_role'=>null,
        'tp_role'=>null,
        'summon_role'=>null,
        'chat_role'=>null,
        'user_jar'=>null,
        'user_ftp'=>null,
        'visible'=>null,
        'user_schedule'=>null,
        'user_name'=>null,
        'user_visibility'=>null,
        'display_ip'=>null,
        'user_players'=>null,
        'user_mysql'=>null,
        'user_jardir'=>null,
        'user_params'=>null,
        'user_templates'=>null,
        'user_memory'=>null,
        'user_crash_check'=>null,
    );
    var $options = array(
        'location'=>'_default_',
        'max_per_daemon'=>'',
        'allowed_daemons'=>'',
        'shuffle_daemons'=>'',
        'delete_worlds'=>'',
        'delete_user'=>'',
        'dedicated_ip'=>'',
        'use_best_daemon'=>''
    );

    var $clientId = 0;
    var $serviceId = 0;
    var $packageId = 0;

    var $userId = 0;
    var $serverId = 0;

    var $messages = array();
    var $failed = false;

    var $lockFile = false;

    var $action = '';
    var $params = array();

    var $assignedIps = '';
    var $updateAssignedIps = false;
    var $dedicatedIpAvailable = array();
    var $whmcsServerId = 0;

    var $mod = null;

    protected ?\Pimple\Container $di = null;

    public function setDi(\Pimple\Container $di): void
    {
        $this->di = $di;
        $this->mod = $this->di['mod_config']('servicemulticraft');
        $this->options['max_per_daemon'] = intval(@$this->mod['max_per_daemon']);
        $this->options['shuffle_daemons'] = intval(@$this->mod['shuffle_daemons']);
        $this->options['use_best_daemon'] = intval(@$this->mod['use_best_daemon']);
        $this->options['include_suspended'] = (@$this->mod['include_suspended'] === 'include') ? 1 : 0;
        $this->logVerbose = intval(@$this->mod['log_verbose']);
        $this->logApi = intval(@$this->mod['log_api']);
        $this->logEnabled = !intval(@$this->mod['disable_logging']);
    }

    public function getDi(): ?\Pimple\Container
    {
        return $this->di;
    }

    // Initialize module and call appropriate function
    public function call($func, $params)
    {
        try
        {
            $this->action = ucfirst(trim($func, '_'));
            if (!$this->init($params))
                return $this->end();
            $this->$func();
            return $this->end();
        }
        catch(\Exception $e)
        {
            throw new \Exception($e->getMessage());
            return $e->getMessage();
        }
    }

    // The execution failed, log the error and set error state
    function fail($error)
    {
        $this->failed = true;
        $this->debug($error);
        return false;
    }

    // Log debug message
    function debug($msg)
    {
        $this->messages[] = $msg;
        if (!$this->logVerbose)
            return false;
        $this->logModule($msg);
        return false;
    }

    // Log message related to module functionality
    function logModule($raw, $pretty = false)
    {
        $this->di['logger']->info($this->action.': '.($pretty ? $pretty : print_r($raw, true)));
    }

    // Log an API call
    function logApi($method, $params, $response)
    {
        if (!$this->logApi)
            return;
        $this->di['logger']->info($this->action.'>'.$method.'('.json_encode($params).')='.json_encode($response));
    }

    // Convert API error to string
    function err($r)
    {
        if (!isset($r['errors']))
            return 'Empty response';
        if (!is_array($r['errors']))
        {
            if (!@strlen($r['errors']))
                return 'Empty error string';
            return (string)$r['errors'];
        }
        $str = '';
        foreach ($r['errors'] as $e)
        {
            if (strlen($str))
                $str .= ', ';
            $str .= print_r($e, true);            
        }
        return $str;
    }

    static function encode($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }

    // Initialize module from BoxBilling parameters
    function init($order)
    {
        $this->order = $this->di['db']->getExistingModelById('ClientOrder', $order->id, 'Order not found');
        $orderService = $this->di['mod_service']('order');
        $product = $this->di['db']->getExistingModelById('Product', $order->product_id, 'Product not found');
        $productService = $this->di['mod_service']('product');
        $client = $this->di['db']->getExistingModelById('Client', $order->client_id, 'Client not found');
        $clientService = $this->di['mod_service']('client');
        //get order details
        $this->order_details = $orderService->toApiArray($this->order);
        $this->client = $clientService->toApiArray($client);
        $this->product = $productService->toApiArray($product);
        $pc = $this->product['config'];
        $order_config = $this->order_details['config'];

        $this->clientId = intval($order->client_id);
        $this->serviceId = intval($order->id);
        $this->packageId = intval($order->product_id);
        $this->serverId = @$this->order_details['meta']['server_id'];

        $this->server['players'] = (int)$pc['players'];
        $this->server['memory'] = (int)$pc['memory'];
        $this->options['dedicated_ip'] = @$pc['dedicated_ip'];
        $this->server['jarfile'] = @$pc['jarfile'];
        $this->server['name'] = $pc['name'];
        $this->server['jardir'] = @$pc['jardir'];
        $this->serverConfig['visible'] = @$pc['visible'];
        $this->server['default_level'] = @$pc['default_level'];
        $this->server['template'] = @$pc['template'];
        $this->options['allowed_daemons'] = @$pc['allowed_daemons'];
        $this->serverConfig['user_jar'] = intval(@$pc['user_jar']);
        $this->serverConfig['user_name'] = intval(@$pc['user_name']);
        $this->serverConfig['user_schedule'] = intval(@$pc['user_schedule']);
        $this->serverConfig['user_ftp'] = intval(@$pc['user_ftp']);
        $this->serverConfig['user_visibility'] = intval(@$pc['user_visibility']);
        $this->serverConfig['user_players'] = intval(@$pc['user_players']);
        $this->serverConfig['user_jardir'] = intval(@$pc['user_jardir']);
        $this->serverConfig['user_templates'] = intval(@$pc['user_templates']);
        $this->serverConfig['user_params'] = intval(@$pc['user_params']);
        $this->serverConfig['user_mysql'] = intval(@$pc['user_mysql']);
        $this->server['autostart'] = intval(@$pc['autostart']);
        $this->options['create_ftp'] = intval(@$pc['create_ftp']);
        $this->options['delete_worlds'] = strtolower(@$pc['delete_worlds']);
        $this->options['delete_user'] = strtolower(@$pc['delete_user']);
        $this->server['disk_quota'] = intval(@$pc['disk_quota']);
        $this->serverConfig['user_crash_check'] = intval(@$pc['user_crash_check']);

        $this->debug('Multicraft Service Module for BoxBilling v1.0 starting');

        return $this->initApi();
    }

    function lock()
    {
        $this->debug('Locking '.__FILE__);
        $this->lockFile = @fopen(__FILE__, 'rb');
        if (!$this->lockFile || !@flock($this->lockFile, LOCK_EX))
            return $this->fail('Failed to lock file "'.__FILE__.'"');
        return true;
    }

    function unlock()
    {
        if (!$this->lockFile)
            return;
        if (!is_resource($this->lockFile) || get_resource_type($this->lockFile) != 'stream')
            return;
        @flock($this->lockFile, LOCK_UN);
        @fclose($this->lockFile);
    }

    function end()
    {
        $this->unlock();
        $this->logModule($this->messages, "Complete log: ".implode("; ", $this->messages));
        if (!$this->failed)
            return 'success';
        else
        {
            throw new \Exception(end($this->messages));
            return end($this->messages);
        }
    }

    private function _create()
    {
        if (!$this->lock())
            return;

        if (!$this->prepareInstall()
            || !$this->getDaemon()
            || !$this->getServerIp()
            || !$this->createUser()
            || !$this->createServer()
            || !$this->saveServerIp())
        {
            if ($this->serverId)
                $this->api->deleteServer($this->serverId);
            return;
        }
    
        $this->unlock();

        $this->createPlayer();
    }

    private function _terminate()
    {
        if (!$this->getServerId())
        {
            $this->failed = false; // Server seems to already be gone
            return;
        }
    
        $this->terminateServer();
    }

    private function _suspend()
    {
        if (!$this->getServerId())
            return;

        $this->debug('Suspending server '.$this->serverId);
        $r = $this->api->suspendServer($this->serverId);
        if (!$r['success'])
            $this->fail('Failed to suspend server '.$this->serverId.': '.$this->err($r));
    }

    private function _unsuspend()
    {
        if (!$this->getServerId())
            return;

        $this->debug('Unsuspending server '.$this->serverId);
        $r = $this->api->resumeServer($this->serverId);
        if (!$r['success'])
            $this->fail('Failed to unsuspend server '.$this->serverId.': '.$this->err($r));
    }

    public function testConnection()
    {
        if (!$this->initApi())
            $this->end();
        $r = $this->api->getSetting('dbVersion');
        if (!$r['success'])
            return $this->fail('Connection test failed: '.$this->err($r));
        return true;
    }

    function loadIps()
    {
        $ip = '';
        //get dedicated IP list: DaemonID,IP:PORT OR DaemonID,IP OR IP:PORT OR IP
        $ips = $this->mod['dedicated_ips'];
        $this->assignedIps = $ips;
        $ips = @preg_split('/\s+/', $ips);
        if (!is_array($ips))
            return;
        for ($i = 0; $i < count($ips); $i++)
        {
            $cur = explode(',', $ips[$i]);
            if (!$cur || count($cur) < 2)
                continue;
            $dmn = (int)$cur[0];
            if ($dmn && strlen($cur[1]))
                $this->dedicatedIpAvailable[$dmn] = true;
        }
    }

    function prepareInstall()
    {
        if (!$this->packageId)
            return $this->fail('Invalid service plan');
        if (!$this->clientId)
            return $this->fail('Invalid client: '.$this->clientId);
        if (!$this->server['players'])
            return $this->fail('Number of slots not specified for service plan '.$this->packageId);
        if (!$this->server['memory'])
            return $this->fail('Amount of memory not specified for service plan '.$this->packageId);
        if ($this->serverId)
            return $this->fail('Server ID already set for this service (field "Multicraft Server ID" is '
                .intval($this->serverId).'). Please make sure that the service has not yet been set up and clear the ID.');

        $this->loadIps();

        $this->clientData['email'] = $this->client['email'];

        $this->clientData['username'] = $this->clientData['email'];

        $this->debug('Verified data for client '.$this->clientId.', service '.$this->serviceId
            .', plan '.$this->packageId.': Username "'.$this->clientData['username']
            .'", players '.$this->server['players'].', RAM '.$this->server['memory']);

        $this->clientData['password'] = substr(md5(rand()), 0, 8);
        $this->debug('Generated new password: '.$this->clientData['password']);
        
        return true;
    }

    function saveServerIp()
    {
        $ipStr = $this->server['ip'].($this->server['port'] ? ':' : '').$this->server['port'];

        $this->debug('Setting IP of '.$this->serviceId.' to '.$ipStr);

        $params = array(
            'id'=>$this->order_details['id'],
            'meta'=>array(
                'server_id'=>$this->serverId,
                'server_ip'=>$ipStr,
            ),
        );

        $orderService = $this->di['mod_service']('order');
        if (!$orderService->updateOrder($this->order, $params))
            return $this->fail('Failed to set server IP and ID: ');

        if ($this->updateAssignedIps)
        {
            $params = array(
                'ext'=>'mod_servicemulticraft',
            );
            $params = $this->di['api_admin']->extension_config_get($params);
            $params['ext'] = 'mod_servicemulticraft';
            $params['dedicated_ips'] = $this->assignedIps;

            if (!$this->di['api_admin']->extension_config_save($params))
                return $this->fail('Warning: Failed to add/remove IP from "Assigned IP Addresses"!');
        }
        return true;
    }

    function getUsedResources($daemon)
    {
        $r = $this->api->getConnectionMemory($daemon, $this->options['include_suspended']);
        if (!$r['success'])
            $this->debug('Error getting memory information for daemon '.$daemon.': '.$this->err($r));
        $freeRam = 0;
        $usedRam = @$r['data']['used'];
        $totalRam = @$r['data']['total'];
        if (!$totalRam)
        {
            $this->debug('Daemon '.$daemon.' has no available memory amount set.');
            $freeRam = $this->server['memory']; 
        }
        else
            $freeRam = $totalRam - $usedRam;
        if (intval($this->options['max_per_daemon']))
        {
            $r = $this->api->listServersByConnection($daemon);
            if (!$r['success'])
                return $this->debug('Error getting servers for daemon '.$daemon.': '.$this->err($r));
            $list = @$r['data']['Servers'];
        }
        else
            $list = array();
        return array('count'=>(is_array($list) ? count($list) : 0), 'freeRam'=>$freeRam, 'usedRam'=>$usedRam, 'totalRam'=>$totalRam);
    }


    function getDaemon()
    {
        $r = $this->api->listConnections();
        if (!$r['success'])
            return $this->fail('Error getting connections: '.$this->err($r));
        $daemons = array_keys($r['data']['Daemons']);

        $allowed = array_map('trim', explode(',', $this->options['allowed_daemons']));
        $location = '_default_';
        $allowedMap = array($location=>array());
        foreach ($allowed as $a)
        {
            $m = array();
            if (preg_match('/([^:]+):(.*)/', $a, $m))
            {
                $location = $m[1];
                $a = $m[2];
            }
            if ((int)$a)
                $allowedMap[$location][] = (int)$a;
        }

        $location = $this->options['location'];
        if (!isset($allowedMap[$location]))
        {
            $this->debug('No daemon list for location '.$location.'. Setting to default location.');
            $location = '_default_';
        }
        $allowed = isset($allowedMap[$location]) ? $allowedMap[$location] : array();

        if (count($allowed))
            $this->debug('Allowed daemons'.($location != '_default_' ? ' for location '.$location : '').': '.implode(', ', $allowed));

        $daemon = 0;
        $max = intval($this->options['max_per_daemon']);
        if (intval($this->options['shuffle_daemons']))
            shuffle($daemons);
        $best = array(0, 0);
        foreach ($daemons as $d)
        {
            if (count($allowed) && !in_array($d, $allowed))
            {
                $this->debug('Skipping daemon '.$d.'. Not in allowed daemon list.');
                continue;
            }

            if ($this->options['dedicated_ip'] == 'yes' && !@$this->dedicatedIpAvailable[$d])
            {
                $this->debug('Skipping daemon '.$d.'. Dedicated IP requested but none available for this daemon.');
                continue;
            }

            $rc = $this->getUsedResources($d);

            if ($rc['freeRam'] < $this->server['memory'])
            {
                $this->debug('Skipping daemon '.$d.'. Memory used: '.$rc['usedRam'].'/'.$rc['totalRam'].', free: '.$rc['freeRam'] 
                    .', requested: '.$this->server['memory']);
                continue;
            }

            if ($max && $rc['count'] >= $max)
            {
                $this->debug('Skipping daemon '.$d.'. Servers: '.$rc['count'].'/'.$max);
                continue;
            }
            if (!intval($this->options['use_best_daemon']))
            {
                $daemon = $d;
                break;
            }
            if (!$best[1] || ($rc['freeRam'] > $best[0]))
            {
                $best = array($rc['freeRam'], $d);
                $this->debug('Daemon '.$d.' is new best ('.$best[0].' MB free)');
            }
            else
                $this->debug('Daemon '.$d.' has less free RAM than previous best ('.$rc['freeRam'].' MB free)');
        }
        if (intval($this->options['use_best_daemon']))
            $daemon = $best[1];
        if (!$daemon)
            return $this->fail('No suitable daemon found!'.(count($this->messages) ? ' ('.@end($this->messages).')' : ''));

        $this->server['daemon_id'] = $daemon;
        $this->server['port'] = ''; //automatically determined by front end

        $this->debug('Creating server on daemon '.$this->server['daemon_id']);
        return true;
    }

    function getServerIp()
    {
        if ($this->options['dedicated_ip'] == 'no')
        {
            $this->debug('Not assigning dedicated IP.');
            return true;
        }
        else if ($this->options['dedicated_ip'] == 'yes')
            $this->debug('Requiring dedicated IP.');
        else
            $this->debug('Getting server IP');

        $ips = @preg_split('/\s+/', $this->assignedIps);
        if (!is_array($ips))
            $ips = array();
        $rem = array();
        for ($i = 0; $i < count($ips); $i++)
        {
            $cur = explode(',', $ips[$i]);
            $dmn = false;
            if (!$cur || count($cur) < 2)
                $cur = @$cur[0];
            else
            {
                $dmn = (int)$cur[0];
                $cur = $cur[1];
            }
            //skip empty lines
            if (!strlen($cur))
                continue;
            //use IP if daemon matches or is not specified
            if ($dmn === false || $dmn == $this->server['daemon_id'])
            {
                $ip = $cur;
                $rem[] = $i;
                break;
            }
        }

        //remove IPs marked for removal
        foreach (array_reverse($rem) as $rm)
            unset($ips[$rm]);

        if (strlen($ip))
        {
            $this->updateAssignedIps = true;
            $this->assignedIps = implode("\n", $ips);
            $this->debug('Using IP from "Assigned IP Addresses" list: '.$ip);
            $ip = explode(':', $ip);
            if ($ip && count($ip) == 2)
                $this->server['port'] = $ip[1];
            else
                $this->server['port'] = '';
            $this->server['ip'] = @$ip[0];
        }
        else if ($this->options['dedicated_ip'] == 'yes')
            return $this->fail('No dedicated IP available on daemon '.$this->server['daemon_id'].'!');
        return true;
    }

    function saveUser()
    {
        return true;
    }

    function createUser()
    {
        if (!strlen($this->clientData['email']))
            return $this->fail('No email address found, aborting.');
        $r = $this->api->findUsers('email', '='.$this->clientData['email']);
        if (!$r['success'])
            return $this->fail('Error finding user by mail "'.$this->clientData['email'].'": '.$this->err($r));
        $user = $r['data']['Users'];
        $this->userId = 0;
        foreach ($user as $id=>$name)
        {
            $this->userId = $id;
            $this->clientData['username'] = $name;
            if ($this->existingPassword)
                $this->clientData['password'] = $this->existingPassword;
            $this->debug('Found user "'.$name.'" ('.$id.') with same email ('.$this->clientData['email'].'). Reusing.');
            return $this->saveUser();
        }
        $r = $this->api->createUser($this->clientData['username'], $this->clientData['email'],
            $this->clientData['password'], '', true);
        if (!$r['success'])
            return $this->fail('Error creating user "'.$this->clientData['username'].'": '.$this->err($r));
        $this->userId = $r['data']['id'];
        $this->debug('Created user '.$this->userId);
    
        return $this->saveUser();
    }

    function createServer()
    {
        $r = $this->api->createServerOn($this->server['daemon_id']);
        $id = 0;
        if (!$r['success'] || !($id = $r['data']['id']))
            return $this->fail('Error creating server: '.$this->err($r));
        $this->debug('Created server '.$id);
        $this->serverId = $id;

        if (!$this->updateServer())
            return false;

        $r = $this->api->setServerOwner($id, $this->userId, true);
        if (!$r['success'])
            return $this->fail('Error setting new server owner to '.$this->userId.' for server'.$id.': '.$this->err($r));

        if (!($r = $this->getServer()))
            return;

        $this->server['port'] = @$r['data']['Server']['port'];
        $this->server['ip'] = @$r['data']['Server']['ip'];

        if (intval($this->server['autostart']))
        {
            $this->api->startServer($id);
            $this->debug('Server '.$this->serverId.' started');
        }
        return true;
    }

    function createPlayer()
    {
        $r = $this->api->createPlayer($this->serverId, $this->clientData['username'], 1);
        if (!$r['success'])
            return $this->debug('Error creating player for server '.$this->serverId.': '.$this->err($r));
        $plr = $r['data']['id'];
        $this->debug('Created player '.$plr);
        $r = $this->api->assignPlayerToUser($plr, $this->userId);
        if (!$r['success'])
            return $this->debug('Error assigning player to user for server '.$this->serverId.': '.$this->err($r));
        return true;
    }

    private function getServerId()
    {
        if (!$this->serverId)
            return $this->fail('No server for service '.$this->serviceId.'!');
        return true;
    }

    public function getServer()
    {
        $r = $this->api->getServer($this->serverId);
        if (!$r['success'])
            return $this->fail('Error getting server information for server '.$this->serverId.': '.$this->err($r));
        return $r;
    }

    function terminateServer()
    {
        $this->debug('Terminating server '.$this->serverId.'. '
            .(($this->options['delete_worlds'] === 'yes') ? 'Deleting' : 'Not deleting').' Worlds. '
            .(($this->options['delete_user'] === 'yes') ? 'Deleting' : 'Not deleting').' User.');

        if (!($r = $this->getServer()))
            return;

        $curDmn = @$r['data']['Server']['daemon_id'];
        $curPort = @$r['data']['Server']['port'];
        $curIp = @$r['data']['Server']['ip'];

        if ($this->options['delete_worlds'] === 'yes')
        {
            $r = $this->api->stopServer($this->serverId);
            if (!$r['success'])
            {
                $this->debug('Warning: Failed to stop server '.$this->serverId
                    .' (worlds will not get deleted): '.$this->err($r));
            }
        }
        $retry = $this->retryTimes;
        for ($i = 0; $i < $retry; $i++)
        {
            $r = $this->api->deleteServer($this->serverId,
                ($this->options['delete_worlds'] === 'yes') ? 'yes' : 'no',
                ($this->options['delete_user'] === 'yes') ? 'yes' : 'no'
            );
            if ($r['success'])
                break;
            $dir = @isset($r['errors'][0]['deleteDir'][0]) ? $r['errors'][0]['deleteDir'][0] : '';
            if (($i < ($retry - 1))
                && @preg_match('/Server still running/', $dir))
            {
                $this->debug('Server still running, waiting for one second');
                sleep(1);
            }
            else
                return $this->fail('Failed to terminate server '.$this->serverId.': '.$this->err($r));
        }

        if ($curIp && $curIp != '0.0.0.0')
        {
            $this->loadIps();

            if ($this->hasDedip($curDmn, $curIp, $curPort) && $this->recycleIp($curDmn, $curIp, $curPort))
                $this->updateAssignedIps = true;
        }
        else
            $this->debug('IP '.$curIp.' won\'t be written back');

        $this->serverId = 0;
        if (!$this->saveServerIp())
            $this->fail('Failed to update server IP and ID');
        return true;
    }

    function hasDedip($dmn, $ip, $port)
    {
        $this->debug('Checking for dedicated IP: '.$ip);
        $r = $this->api->getConnection($dmn);
        if (!$r['success'])
            return $this->fail('Error getting daemon '.$dmn.': '.$this->err($r));
        $daemonIp = $r['data']['Daemon']['ip'];
        $daemonFtpIp = $r['data']['Daemon']['ftp_ip'];
        if (strlen($ip) && $ip != '0.0.0.0' && $daemonIp != $ip && $daemonFtpIp != $ip)
        {
            $this->debug('Dedicated IP.');
            return true;
        }
        $this->debug('No dedicated IP.');
        return false;
    }

    function recycleIp($dmn, $ip, $port)
    {
        $this->debug('Recycling IP '.$ip);
        $this->assignedIps .= "\n".$dmn.','.$ip.':'.$port;
        $this->updateAssignedIps = true;
        $this->debug('IP '.$ip.' will be written back to assigned IPs list');
        return true;
    }

    function updateServer()
    {
        $this->debug('Updating server '.$this->serverId);
        $id = $this->serverId;

        $sv = $this->server;
        $svCfg = $this->serverConfig;

        if (!isset($sv['name']))
            $sv['name'] = '{USERNAME}\'s Minecraft Server';
        $sv['name'] = str_replace(array(
                '{USERNAME}',
                '{EMAIL}',
                '{IP}',
                '{PORT}',
                '{MEMORY}',
                '{JARFILE}',
                '{TEMPLATE}',
                '{DAEMON}',
            ), array(
                $this->clientData['username'],
                $this->clientData['email'],
                $sv['ip'],
                $sv['port'],
                $sv['memory'],
                $sv['jarfile'],
                $sv['template'],
                $sv['daemon_id'],
            ), $sv['name']);
        if ($sv['template'] && !$sv['setup'])
            $sv['setup'] = 'install';

        $sv = array_filter($sv, function($x) { return !is_null($x); });
        $svCfg = array_filter($svCfg, function($x) { return !is_null($x); });

        $r = $this->api->updateServer($id, array_keys($sv), array_values($sv));
        if (!$r['success'])
            return $this->fail('Failed to update server: '.$this->err($r));
        $r = $this->api->updateServerConfig($id, array_keys($svCfg), array_values($svCfg));
        if (!$r['success'])
            return $this->fail('Failed to update server config: '.$this->err($r));

        if (!$this->userId)
        {
            $r = $this->api->getServerOwner($id);
            if (!$r['success'])
                $this->debug('Failed to get current owner for server'.$id.': '.$this->err($r));
            $this->userId = intval(@$r['data']['user_id']);
        }
        if (intval($this->options['create_ftp']))
            $r = $this->api->setUserFtpAccess($this->userId, $id, 'rw');
        else
            $r = $this->api->setUserFtpAccess($this->userId, $id, '');
        if (!$r['success'])
            $this->debug('Warning: Failed to update user FTP access: '.$this->err($r));

        $this->debug('Server '.$this->serverId.' updated');
        return true;
    }

    public function initApi()
    {
        $username   = $this->mod['username'];
        $key        = $this->mod['api_key'];
        $url        = $this->mod['url'];

        if (!$username || !$key || !$url)
            return $this->fail('API information incomplete');

        require(dirname(__FILE__).'/LoggingAPI.php');

        $url = rtrim($url, '/') . '/api.php';
        $this->api = new \LoggingAPI($this, $url, $username, $key);
        return true;
    }

    public function activate($order)
    {
        return $this->call('_create', $order);
    }

    public function uncancel($order)
    {
        return $this->activate($order);
    }

    public function cancel($order)
    {
        return $this->delete($order);
    }

    public function delete($order)
    {
        return $this->call('_terminate', $order);
    }

    public function suspend($order)
    {
        return $this->call('_suspend', $order);
    }

    public function unsuspend($order)
    {
        return $this->call('_unsuspend', $order);
    }
}
