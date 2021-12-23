<?php

namespace Mohamedsabil83\LaravelHijrian;

use Carbon\Carbon;
use Mohamedsabil83\LaravelHijrian\Concerns\InteractsWithDates;

class LaravelHijrian
{
    use InteractsWithDates;

    private static $date;

    public function __construct()
    {
        self::$date = new Carbon();
    }

    /**
     * Return Hijri date.
     *
     * @param string|null $date
     *
     * @return \Carbon\Carbon
     */
    public static function hijri($date = null)
    {
        [$year, $month, $day] = explode('-', self::$date->parse($date)->format('Y-m-d'));

        return self::gth((int) $year, (int) $month, (int) $day);
    }

    /**
     * Return Gregorian date.
     *
     * @param string|null $date
     *
     * @return \Carbon\Carbon
     */
    public static function gregory($date = null)
    {
        if (empty($date)) {
            return self::$date->now();
        }

        [$year, $month, $day] = explode('-', self::$date->parse($date)->format('Y-m-d'));

        return self::htg((int) $year, (int) $month, (int) $day);
    }
}
