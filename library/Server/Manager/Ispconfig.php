<?php

declare(strict_types=1);

/**
 * Copyright 2022-2025 FOSSBilling
 * SPDX-License-Identifier: Apache-2.0.
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 */

use FOSSBilling\InjectionAwareInterface;
use Pimple\Container;

/**
 * ISPConfig Remote API integration.
 *
 * Each FOSSBilling hosting service is provisioned as one ISPConfig client and
 * one website, so its credentials and lifecycle remain isolated from other
 * services belonging to the same billing customer.
 */
class Server_Manager_Ispconfig extends Server_Manager implements InjectionAwareInterface
{
    private ?Container $di = null;

    public function setDi(Container $di): void
    {
        $this->di = $di;
    }

    public function getDi(): ?Container
    {
        return $this->di;
    }

    public static function getForm(): array
    {
        return [
            'label' => 'ISPConfig',
            'form' => [
                'credentials' => [
                    'fields' => [
                        [
                            'name' => 'username',
                            'type' => 'text',
                            'label' => 'Remote User',
                            'placeholder' => 'ISPConfig Remote User name',
                            'required' => true,
                            'secret' => true,
                        ],
                        [
                            'name' => 'password',
                            'type' => 'password',
                            'label' => 'Remote User Password',
                            'placeholder' => 'Password for the ISPConfig Remote User',
                            'required' => true,
                            'secret' => true,
                        ],
                    ],
                ],
            ],
        ];
    }

    public static function getSecretFields(): array
    {
        return ['username', 'password'];
    }

    public function init(): void
    {
        if (trim((string) ($this->_config['host'] ?? '')) === '') {
            throw new Server_Exception('The ISPConfig hostname is missing. Please configure it in the server settings.');
        }
        if (trim((string) ($this->_config['username'] ?? '')) === '' || trim((string) ($this->_config['password'] ?? '')) === '') {
            throw new Server_Exception('ISPConfig Remote User credentials are missing.');
        }

        $webServerId = filter_var($this->_config['config']['ispconfig_web_server_id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if ($webServerId === false) {
            throw new Server_Exception('Configure a valid ISPConfig web server ID in the server settings.');
        }

        $parentClientId = filter_var($this->_config['config']['ispconfig_parent_client_id'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
        if ($parentClientId === false) {
            throw new Server_Exception('The ISPConfig parent client ID must be zero or a positive integer.');
        }

        $dnsServerId = filter_var($this->_config['config']['ispconfig_dns_server_id'] ?? $webServerId, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if ($dnsServerId === false) {
            throw new Server_Exception('Configure a valid ISPConfig DNS server ID in the server settings.');
        }

        $this->_config['config']['ispconfig_web_server_id'] = $webServerId;
        $this->_config['config']['ispconfig_dns_server_id'] = $dnsServerId;
        $this->_config['config']['ispconfig_parent_client_id'] = $parentClientId;
        $this->_config['port'] = FOSSBilling\Tools::normalizePort($this->_config['port'] ?? null, 8080);
    }

    public function getLoginUrl(?Server_Account $account = null): string
    {
        return $this->getBaseUrl() . '/';
    }

    public function getResellerLoginUrl(?Server_Account $account = null): string
    {
        return $this->getLoginUrl($account);
    }

    public function testConnection(): bool
    {
        $this->withApi(static fn (SoapClient $api, string $sessionId) => true);

        return true;
    }

    public function createAccount(Server_Account $account): bool
    {
        $client = $account->getClient();
        if ($client === null || $client->getEmail() === null || $account->getUsername() === null || $account->getPassword() === null || $account->getDomain() === null) {
            throw new Server_Exception('ISPConfig account creation requires a client email, username, password, and domain.');
        }
        if ($this->getRemoteId($account, 'ispconfig_web_domain_id') !== null) {
            return true;
        }

        $this->withApi(function (SoapClient $api, string $sessionId) use ($account, $client): void {
            $existingWebsite = $this->findExistingWebsite($api, $sessionId, $account->getDomain());
            if ($existingWebsite !== null) {
                throw new Server_Exception(
                    'The domain :domain is already hosted in ISPConfig (website ID :id). Import or link the existing website instead of creating a duplicate.',
                    [':domain' => $account->getDomain(), ':id' => $existingWebsite]
                );
            }

            $parentClientId = (int) $this->_config['config']['ispconfig_parent_client_id'];
            $quota = $this->quota($account->getPackage()->getQuota());
            $trafficQuota = $this->quota($account->getPackage()->getBandwidth());
            $clientRecord = [
                'company_name' => $client->getCompany() ?: $client->getFullName() ?: $client->getEmail(),
                'contact_name' => $client->getFullName() ?: $client->getEmail(),
                'customer_no' => 'FB-' . $client->getId() . '-' . $account->getServiceId(),
                'username' => $account->getUsername(),
                'password' => $account->getPassword(),
                'language' => 'en',
                'usertheme' => 'default',
                'street' => $client->getStreet() ?? '',
                'zip' => $client->getZip() ?? '',
                'city' => $client->getCity() ?? '',
                'state' => $client->getState() ?? '',
                'country' => $client->getCountry() ?? '',
                'telephone' => $client->getTelephone() ?? '',
                'email' => $client->getEmail(),
                'default_mailserver' => 0,
                'limit_maildomain' => 0,
                'limit_mailbox' => 0,
                'limit_mailalias' => 0,
                'limit_mailforward' => 0,
                'limit_mailcatchall' => 0,
                'limit_mailrouting' => 0,
                'limit_mail_wildcard' => 0,
                'limit_ftp_user' => 0,
                'limit_shell_user' => 0,
                'limit_web_domain' => 1,
                'web_php_options' => 'no,fast-cgi,cgi,mod,suphp,php-fpm,hhvm',
                'ssh_chroot' => 'no',
                'limit_database' => 0,
                'limit_database_user' => 0,
                'limit_cron' => 0,
                'limit_cron_type' => 'url',
                'limit_traffic_quota' => $trafficQuota,
                'limit_client' => 0,
                'parent_client_id' => $parentClientId,
            ];

            $existingClientId = $this->getRemoteId($account, 'ispconfig_client_id');
            $createdClient = $existingClientId === null;
            if ($createdClient) {
                $clientId = $api->client_add($sessionId, $parentClientId, $clientRecord);
                if (!is_numeric($clientId) || (int) $clientId < 1) {
                    throw new Server_Exception('ISPConfig did not return a valid client ID.');
                }
                $clientId = (int) $clientId;
                $this->storeRemoteId($account, 'ispconfig_client_id', (string) $clientId);
            } else {
                $clientId = (int) $existingClientId;
            }

            try {
                $siteRecord = [
                    'server_id' => (int) $this->_config['config']['ispconfig_web_server_id'],
                    'ip_address' => $account->getIp() ?: $this->_config['ip'],
                    'domain' => $account->getDomain(),
                    'type' => 'vhost',
                    'parent_domain_id' => 0,
                    'vhost_type' => 'name',
                    'hd_quota' => $quota,
                    'traffic_quota' => $trafficQuota,
                    'active' => 'y',
                    'allow_override' => 'All',
                    'pm_process_idle_timeout' => '10',
                    'pm_max_requests' => '0',
                    'http_port' => '80',
                    'https_port' => '443',
                    'cgi' => 'n',
                    'ssi' => 'n',
                    'suexec' => 'y',
                    'php' => 'php-fpm',
                    'ssl' => 'y',
                    'ssl_letsencrypt' => 'y',
                    'php_fpm_use_socket' => 'y',
                    'pm' => 'ondemand',
                    'subdomain' => 'www',
                    'redirect_type' => '',
                    'redirect_path' => '',
                ];
                $siteId = $api->sites_web_domain_add($sessionId, (int) $clientId, $siteRecord);
                if (!is_numeric($siteId) || (int) $siteId < 1) {
                    throw new Server_Exception('ISPConfig did not return a valid website ID.');
                }
                $this->storeRemoteId($account, 'ispconfig_web_domain_id', (string) $siteId);

                $this->provisionDns($api, $sessionId, $account, (int) $clientId);
            } catch (Throwable $e) {
                $createdSiteId = $this->getRemoteId($account, 'ispconfig_web_domain_id');
                if ($createdSiteId !== null) {
                    try {
                        $this->assertNotFalse($api->sites_web_domain_delete($sessionId, $clientId, (int) $createdSiteId), 'roll back website creation');
                        $this->deleteRemoteId($account, 'ispconfig_web_domain_id');
                    } catch (Throwable $cleanupError) {
                        $this->getLog()->error('ISPConfig setup failed and the new website could not be rolled back: ' . $cleanupError->getMessage());
                    }
                }

                if ($createdClient) {
                    try {
                        $this->assertNotFalse($api->client_delete($sessionId, $clientId), 'roll back client creation');
                        $this->deleteRemoteId($account, 'ispconfig_client_id');
                    } catch (Throwable $cleanupError) {
                        $this->getLog()->error('ISPConfig setup failed and the new client could not be rolled back: ' . $cleanupError->getMessage());
                    }
                }

                throw $e;
            }
        });

        return true;
    }

    public function synchronizeAccount(Server_Account $account): Server_Account
    {
        $siteId = $this->getRemoteId($account, 'ispconfig_web_domain_id');
        if ($siteId === null) {
            throw new Server_Exception('The ISPConfig website ID is not associated with this hosting service.');
        }

        $site = $this->withApi(fn (SoapClient $api, string $sessionId) => $api->sites_web_domain_get($sessionId, (int) $siteId));
        $site = $this->normalizeRecord($site);
        if ($site === null) {
            throw new Server_Exception('ISPConfig did not return website details for the hosting service.');
        }

        $new = clone $account;
        $new->setSuspended(($site['active'] ?? 'n') !== 'y');

        return $new;
    }

    public function suspendAccount(Server_Account $account): bool
    {
        return $this->updateWebsite($account, ['active' => 'n']);
    }

    public function unsuspendAccount(Server_Account $account): bool
    {
        return $this->updateWebsite($account, ['active' => 'y']);
    }

    public function cancelAccount(Server_Account $account): bool
    {
        $clientId = $this->getRemoteId($account, 'ispconfig_client_id');
        $siteId = $this->getRemoteId($account, 'ispconfig_web_domain_id');
        if ($clientId === null) {
            throw new Server_Exception('The ISPConfig client ID is not associated with this hosting service.');
        }

        $this->withApi(function (SoapClient $api, string $sessionId) use ($account, $clientId, $siteId): void {
            if ($siteId !== null) {
                $this->assertNotFalse($api->sites_web_domain_delete($sessionId, (int) $clientId, (int) $siteId), 'delete website');
                $this->deleteRemoteId($account, 'ispconfig_web_domain_id');
            }

            $dnsKeys = ['ispconfig_dns_zone_id'];
            $db = $this->requireDatabase();
            $rows = $db->findAll('extension_meta', 'extension = :extension AND client_id = :client_id AND rel_type = :rel_type AND rel_id = :rel_id AND meta_key LIKE :prefix', [
                'extension' => 'mod_servicehosting',
                'client_id' => $account->getClientId(),
                'rel_type' => 'service_hosting',
                'rel_id' => (string) $account->getServiceId(),
                'prefix' => 'ispconfig_dns_%_id',
            ]);
            foreach ($rows as $row) {
                $key = (string) ($row->meta_key ?? '');
                $recordId = (int) ($row->meta_value ?? 0);
                if ($key !== 'ispconfig_dns_zone_id' && $recordId > 0) {
                    try {
                        $api->dns_a_delete($sessionId, (int) $clientId, $recordId);
                    } catch (Throwable $cleanupError) {
                        $this->getLog()->error('ISPConfig DNS A record cleanup failed: ' . $cleanupError->getMessage());
                    }
                    $this->deleteRemoteId($account, $key);
                }
            }
            foreach ($dnsKeys as $key) {
                $this->deleteRemoteId($account, $key);
            }

            $this->assertNotFalse($api->client_delete($sessionId, (int) $clientId), 'delete client');
        });
        $this->deleteRemoteId($account, 'ispconfig_web_domain_id');
        $this->deleteRemoteId($account, 'ispconfig_client_id');

        return true;
    }

    public function changeAccountPassword(Server_Account $account, string $newPassword): bool
    {
        $clientId = $this->requireClientId($account);
        $this->withApi(fn (SoapClient $api, string $sessionId) => $this->assertNotFalse($api->client_update($sessionId, $clientId, $clientId, ['password' => $newPassword]), 'change client password'));

        return true;
    }

    public function changeAccountUsername(Server_Account $account, string $newUsername): bool
    {
        $clientId = $this->requireClientId($account);
        $this->withApi(fn (SoapClient $api, string $sessionId) => $this->assertNotFalse($api->client_update($sessionId, $clientId, $clientId, ['username' => $newUsername]), 'change client username'));

        return true;
    }

    public function changeAccountDomain(Server_Account $account, string $newDomain): bool
    {
        return $this->updateWebsite($account, ['domain' => $newDomain]);
    }

    public function changeAccountIp(Server_Account $account, string $newIp): bool
    {
        return $this->updateWebsite($account, ['ip_address' => $newIp]);
    }

    public function changeAccountPackage(Server_Account $account, Server_Package $package): bool
    {
        $quota = $this->quota($package->getQuota());
        $trafficQuota = $this->quota($package->getBandwidth());
        $this->updateWebsite($account, ['hd_quota' => $quota, 'traffic_quota' => $trafficQuota]);

        $clientId = $this->requireClientId($account);
        $this->withApi(fn (SoapClient $api, string $sessionId) => $this->assertNotFalse($api->client_update($sessionId, $clientId, $clientId, [
            'limit_web_quota' => $quota,
            'limit_traffic_quota' => $trafficQuota,
        ]), 'change client limits'));

        return true;
    }

    #[Override]
    public function generateUsername(string $domain): string
    {
        $username = strtolower((string) preg_replace('/[^a-z0-9]/i', '', $domain));
        $username = substr($username, 0, 7);
        if ($username === '') {
            $username = 'user';
        }
        if (is_numeric($username[0])) {
            $username = 'u' . substr($username, 0, 6);
        }
        $username .= random_int(0, 9);
        $prefix = strtolower((string) ($this->_config['config']['userprefix'] ?? ''));
        $prefix = (string) preg_replace('/[^a-z0-9]/', '', $prefix);
        if (is_numeric($prefix[0] ?? '')) {
            $prefix = 'u' . $prefix;
        }

        return substr($prefix, 0, max(0, 30 - strlen($username))) . $username;
    }

    private function getBaseUrl(): string
    {
        $scheme = FOSSBilling\Tools::normalizeBoolean($this->_config['secure'] ?? true, true) ? 'https' : 'http';
        $host = trim((string) $this->_config['host']);
        $host = preg_replace('#^https?://#i', '', $host);
        $host = rtrim((string) $host, '/');

        return sprintf('%s://%s:%d', $scheme, $host, (int) $this->_config['port']);
    }

    private function withApi(callable $callback): mixed
    {
        if (!class_exists(SoapClient::class)) {
            throw new Server_Exception('The PHP SOAP extension is required to connect to ISPConfig.');
        }

        $baseUrl = $this->getBaseUrl();
        $verifyTls = FOSSBilling\Tools::normalizeBoolean($this->_config['config']['tls_verify'] ?? true, true);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => $verifyTls,
                'verify_peer_name' => $verifyTls,
            ],
        ]);
        $options = [
            'location' => $baseUrl . '/remote/index.php',
            'uri' => $baseUrl . '/remote/',
            'trace' => false,
            'exceptions' => true,
            'connection_timeout' => 15,
            'stream_context' => $context,
        ];

        try {
            $api = new SoapClient(null, $options);
            $sessionId = $api->login((string) $this->_config['username'], (string) $this->_config['password']);
            if (!is_string($sessionId) || $sessionId === '') {
                throw new Server_Exception('ISPConfig rejected the Remote User credentials.');
            }

            try {
                return $callback($api, $sessionId);
            } finally {
                try {
                    $api->logout($sessionId);
                } catch (Throwable) {
                    // A logout failure must not mask the API operation result.
                }
            }
        } catch (Server_Exception $e) {
            throw $e;
        } catch (Throwable $e) {
            $this->getLog()->error('ISPConfig API request failed: ' . $e->getMessage());
            throw new Server_Exception('ISPConfig API request failed. Check the Remote User permissions and server logs.', null, (int) $e->getCode());
        }
    }

    private function updateWebsite(Server_Account $account, array $fields): bool
    {
        $clientId = $this->requireClientId($account);
        $siteId = $this->getRemoteId($account, 'ispconfig_web_domain_id');
        if ($siteId === null) {
            throw new Server_Exception('The ISPConfig website ID is not associated with this hosting service.');
        }

        $this->withApi(fn (SoapClient $api, string $sessionId) => $this->assertNotFalse($api->sites_web_domain_update($sessionId, $clientId, (int) $siteId, $fields), 'update website'));

        return true;
    }

    private function assertNotFalse(mixed $result, string $action): void
    {
        if ($result === false) {
            throw new Server_Exception('ISPConfig failed to :action:. Check the Remote User permissions and server logs.', [':action' => $action]);
        }
    }

    private function requireClientId(Server_Account $account): int
    {
        $clientId = $this->getRemoteId($account, 'ispconfig_client_id');
        if ($clientId === null) {
            throw new Server_Exception('The ISPConfig client ID is not associated with this hosting service.');
        }

        return (int) $clientId;
    }

    private function quota(?string $value): int
    {
        if ($value === null || trim($value) === '' || strtolower(trim($value)) === 'unlimited') {
            return -1;
        }

        return is_numeric($value) && (int) $value >= 0 ? (int) $value : -1;
    }

    private function normalizeRecord(mixed $record): ?array
    {
        if (is_array($record)) {
            return $record;
        }
        if (is_object($record)) {
            return get_object_vars($record);
        }

        return null;
    }

    private function getRemoteId(Server_Account $account, string $key): ?string
    {
        $db = $this->requireDatabase();
        $meta = $db->findOne('extension_meta', 'extension = :extension AND client_id = :client_id AND rel_type = :rel_type AND rel_id = :rel_id AND meta_key = :meta_key', [
            'extension' => 'mod_servicehosting',
            'client_id' => $account->getClientId(),
            'rel_type' => 'service_hosting',
            'rel_id' => (string) $account->getServiceId(),
            'meta_key' => $key,
        ]);
        $value = $meta->meta_value ?? null;

        return is_scalar($value) && (string) $value !== '' ? (string) $value : null;
    }

    private function storeRemoteId(Server_Account $account, string $key, string $value): void
    {
        $db = $this->requireDatabase();
        $meta = $db->findOne('extension_meta', 'extension = :extension AND client_id = :client_id AND rel_type = :rel_type AND rel_id = :rel_id AND meta_key = :meta_key', [
            'extension' => 'mod_servicehosting',
            'client_id' => $account->getClientId(),
            'rel_type' => 'service_hosting',
            'rel_id' => (string) $account->getServiceId(),
            'meta_key' => $key,
        ]);
        if (!$meta) {
            $meta = $db->dispense('extension_meta');
            $meta->extension = 'mod_servicehosting';
            $meta->client_id = $account->getClientId();
            $meta->rel_type = 'service_hosting';
            $meta->rel_id = (string) $account->getServiceId();
            $meta->meta_key = $key;
            $meta->created_at = date('Y-m-d H:i:s');
        }

        $meta->meta_value = $value;
        $meta->updated_at = date('Y-m-d H:i:s');
        $db->store($meta);
    }

    private function deleteRemoteId(Server_Account $account, string $key): void
    {
        $this->requireDatabase()->exec('DELETE FROM extension_meta WHERE extension = :extension AND client_id = :client_id AND rel_type = :rel_type AND rel_id = :rel_id AND meta_key = :meta_key', [
            'extension' => 'mod_servicehosting',
            'client_id' => $account->getClientId(),
            'rel_type' => 'service_hosting',
            'rel_id' => (string) $account->getServiceId(),
            'meta_key' => $key,
        ]);
    }

    private function requireDatabase(): mixed
    {
        if ($this->di === null) {
            throw new Server_Exception('ISPConfig manager dependency injection is not configured.');
        }

        return $this->di['db'];
    }

    private function findExistingWebsite(SoapClient $api, string $sessionId, ?string $domain): ?int
    {
        $domain = strtolower(trim((string) $domain));
        if ($domain === '') {
            return null;
        }

        $consecutiveMissing = 0;

        for ($siteId = 1; $siteId <= 100; $siteId++) {
            try {
                $record = $this->normalizeRecord($api->sites_web_domain_get($sessionId, $siteId));
            } catch (Throwable) {
                $consecutiveMissing++;
                if ($consecutiveMissing >= 25) {
                    break;
                }
                continue;
            }

            $consecutiveMissing = 0;
            if ($record === null) {
                continue;
            }

            $existingDomain = strtolower(trim((string) ($record['domain'] ?? '')));
            if ($existingDomain === $domain) {
                return $siteId;
            }
        }

        return null;
    }

    private function provisionDns(SoapClient $api, string $sessionId, Server_Account $account, int $clientId): void
    {
        $domain = strtolower(trim((string) $account->getDomain(), ". "));
        if ($domain === '' || !preg_match('/^(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\\.)+[a-z]{2,}$/i', $domain)) {
            throw new Server_Exception('ISPConfig DNS provisioning requires a valid fully qualified domain name.');
        }

        $dnsServerId = (int) ($this->_config['config']['ispconfig_dns_server_id'] ?? $this->_config['config']['ispconfig_web_server_id']);
        $ipAddress = trim((string) ($account->getIp() ?: $this->_config['ip']));
        if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {
            throw new Server_Exception('Automatic ISPConfig DNS provisioning requires a valid IPv4 address.');
        }

        $zones = $this->normalizeCollection($api->dns_zone_get($sessionId, -1));
        $zoneId = null;
        $zoneOrigin = null;

        foreach ($zones as $zone) {
            $origin = strtolower(rtrim((string) ($zone['origin'] ?? ''), '.'));
            if ($origin !== '' && ($domain === $origin || str_ends_with($domain, '.' . $origin))) {
                if ($zoneId === null || strlen($origin) > strlen((string) $zoneOrigin)) {
                    $zoneId = is_numeric($zone['id'] ?? null) ? (int) $zone['id'] : null;
                    $zoneOrigin = $origin;
                }
            }
        }

        if ($zoneId === null) {
            $labels = explode('.', $domain);
            if (count($labels) < 2) {
                throw new Server_Exception('Automatic DNS provisioning cannot determine a base zone.');
            }
            $zoneOrigin = implode('.', array_slice($labels, -2));

            foreach ($zones as $zone) {
                if (strtolower(rtrim((string) ($zone['origin'] ?? ''), '.')) === $zoneOrigin) {
                    $zoneId = is_numeric($zone['id'] ?? null) ? (int) $zone['id'] : null;
                    break;
                }
            }

            if ($zoneId === null) {
                $ns1 = trim((string) ($this->_config['ns1'] ?? ''));
                $ns2 = trim((string) ($this->_config['ns2'] ?? ''));
                if ($ns1 === '' || $ns2 === '') {
                    throw new Server_Exception('Configure ns1 and ns2 before automatic DNS zone creation.');
                }

                $serial = (int) date('Ymd') * 100 + 1;
                $zoneId = $api->dns_zone_add($sessionId, $clientId, [
                    'server_id' => $dnsServerId,
                    'origin' => $zoneOrigin . '.',
                    'ns' => rtrim($ns1, '.') . '.',
                    'mbox' => 'domain.' . rtrim($zoneOrigin, '.') . '.',
                    'serial' => $serial,
                    'refresh' => 7200,
                    'retry' => 540,
                    'expire' => 604800,
                    'minimum' => 3600,
                    'ttl' => 3600,
                    'active' => 'y',
                    'xfer' => '',
                    'also_notify' => '',
                    'update_acl' => '',
                ]);
            }
        }

        if (!is_numeric($zoneId) || (int) $zoneId < 1) {
            throw new Server_Exception('ISPConfig did not return a valid DNS zone ID.');
        }

        $names = [$domain];
        $wwwDomain = 'www.' . $domain;
        if (!in_array($wwwDomain, $names, true)) {
            $names[] = $wwwDomain;
        }

        foreach ($names as $name) {
            $relativeName = $name;
            if ($zoneOrigin !== null && str_ends_with($name, '.' . $zoneOrigin)) {
                $relativeName = substr($name, 0, -(strlen($zoneOrigin) + 1));
                if ($relativeName === '') {
                    $relativeName = '@';
                }
            }

            $records = $this->normalizeCollection($api->dns_a_get($sessionId, -1));
            foreach ($records as $record) {
                if ((int) ($record['zone'] ?? 0) === (int) $zoneId) {
                    $existingName = strtolower(rtrim((string) ($record['name'] ?? ''), '.'));
                    $existingFqdn = $existingName === '@'
                        ? $zoneOrigin
                        : ($existingName . (str_contains($existingName, '.') ? '' : '.' . $zoneOrigin));
                    if ($existingFqdn === $name && strtolower((string) ($record['type'] ?? 'A')) === 'a') {
                        continue 2;
                    }
                }
            }

            $recordId = $api->dns_a_add($sessionId, $clientId, [
                'server_id' => $dnsServerId,
                'zone' => (int) $zoneId,
                'name' => $relativeName,
                'type' => 'A',
                'data' => $ipAddress,
                'aux' => 0,
                'ttl' => 3600,
                'active' => 'y',
            ]);
            if (!is_numeric($recordId) || (int) $recordId < 1) {
                throw new Server_Exception('ISPConfig did not return a valid DNS A record ID.');
            }
            $this->storeRemoteId($account, 'ispconfig_dns_zone_id', (string) $zoneId);
            $this->storeRemoteId($account, 'ispconfig_dns_' . str_replace('.', '_', $name) . '_id', (string) $recordId);
        }
    }

    private function normalizeCollection(mixed $records): array
    {
        if (is_object($records)) {
            $records = get_object_vars($records);
        }
        if (!is_array($records)) {
            return [];
        }
        if (array_is_list($records)) {
            $normalized = [];
            foreach ($records as $record) {
                $normalizedRecord = $this->normalizeRecord($record);
                if ($normalizedRecord !== null) {
                    $normalized[] = $normalizedRecord;
                }
            }
            return $normalized;
        }
        $record = $this->normalizeRecord($records);
        return $record === null ? [] : [$record];
    }
}
