<?php

namespace Zoop\Facades;

use Illuminate\Support\Facades\Facade;

class ZoopTransactions extends Facade{

    /**
     * @return string
     */
    protected static function getFacadeAccessor(){
        return 'ZoopTransactions';
    }
}