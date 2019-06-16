<?php

namespace Mohamedsabil83\LaravelHijrian;

use Illuminate\Support\Facades\Facade;

class LaravelHijrianFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LaravelHijrian::class;
    }
}
