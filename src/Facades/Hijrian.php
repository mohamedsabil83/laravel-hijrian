<?php

namespace MohamedSabil83\LaravelHijrian\Facades;

use Illuminate\Support\Facades\Facade;
use MohamedSabil83\LaravelHijrian\LaravelHijrian;

/**
 * @see \MohamedSabil83\LaravelHijrian\LaravelHijrian
 */
class Hijrian extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaravelHijrian::class;
    }
}
