<?php

namespace Mohamedsabil83\LaravelHijrian\Tests;

use Hijrian;
use Carbon\Carbon;

class DateTest extends TestCase
{
    private $hijri;
    private $gregory;

    public function __construct()
    {
        parent::__construct();

        $this->hijri = '1440-12-08';
        $this->gregory = '2019-08-09';
    }

    /**
     * @test Convert Gregory To Hijri.
     *
     * @return void
     */
    public function convert_gregory_to_hijri()
    {
        $hijri = Hijrian::hijri($this->gregory);
        $this->assertSame($this->hijri, $hijri->format('Y-m-d'));
    }

    /**
     * @test Convert Hijri To Gregory.
     *
     * @return void
     */
    public function convert_hijri_to_gregory()
    {
        $gregory = Hijrian::gregory($this->hijri);
        $this->assertSame($this->gregory, $gregory->format('Y-m-d'));
    }

    /**
     * @test Get Gregory date.
     *
     * @return void
     */
    public function get_grogory_date()
    {
        $gregory = Hijrian::gregory();
        $this->assertInstanceOf(Carbon::class, $gregory);
    }

    /**
     * @test Get Hijri date.
     *
     * @return void
     */
    public function get_hijri_date()
    {
        $hijri = Hijrian::hijri();
        $this->assertInstanceOf(Carbon::class, $hijri);
    }
}
