<?php

namespace Digitlimit\Gender\Facades;

use Illuminate\Support\Facades\Facade;

class Gender extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'gender';
    }
}
