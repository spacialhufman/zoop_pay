<?php

namespace Zoop\Facades;

use Illuminate\Support\Facades\Facade;

class ZoopWebhook extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'ZoopWebhook';
    }
}