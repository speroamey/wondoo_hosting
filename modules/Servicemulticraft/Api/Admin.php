<?php
/**
 *
 *   Copyright © 2010-2024 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

namespace Box\Mod\Servicemulticraft\Api;

class Admin extends \Api_Abstract
{

    public function test_connection($data)
    {
        $this->getService()->testConnection();
        return $this->getService()->messages;
    }
}
