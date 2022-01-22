<?php
declare(strict_types=1);

namespace Ankurk91\LaravelAlert\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'alert';
    }
}
