<?php

namespace Fromz\FromzPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Fromz extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fromz';
    }
}
