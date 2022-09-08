<?php

namespace SystemServices\IBMi\Facades;

use Illuminate\Support\Facades\Facade;

class ToolkitService extends Facade
{
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor(): string
    {
        return 'ts';
    }
}
