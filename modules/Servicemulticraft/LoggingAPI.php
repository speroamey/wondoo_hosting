<?php
/**
 *
 *   Copyright © 2010-2016 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

if (!class_exists('MulticraftAPI'))
    require('MulticraftAPI.php');

class LoggingAPI extends MulticraftAPI
{
    var $module;

    public function __construct($module, $url, $user, $key)
    {
        $this->module = $module;
        parent::__construct($url, $user, $key);
    }

    public function __call($function, $args)
    {
        $res = parent::__call($function, $args);
        $this->module->logApi($function, $args, $res);
        return $res;
    }
}


