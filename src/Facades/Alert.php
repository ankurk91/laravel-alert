<?php

namespace Ankurk91\LaravelAlert\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'alert';
    }
}
