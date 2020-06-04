<?php

namespace App\Robot\Services;

class Battery
{

    /**
     * 
     * @var int
     */
    protected static $fullChargeTime = 30;

    /** 
     * @var int
     */
    protected static $workTimeInOneCharge = 60;

    public function __construct()
    {

    }

    public function getWorkTimeInOneCharge()
    {
        return self::$workTimeInOneCharge;
    }

    public function charge()
    {
        echo " \n ::::: Charging Battery ::::: ";
        return self::$fullChargeTime;
    }
}