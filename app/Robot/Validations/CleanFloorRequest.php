<?php

namespace App\Robot\Validations;

use PHPUnit\Util\Exception;

class CleanFloorRequest
{

    /**
     * It takes 30 secs to fully charge the robot
     * @var int
     */
    protected static $availableFloors = ['HARD','CARPET'];

    public function validate($floor, $area)
    {
        self::validateArea($area);
        self::validateFloor($floor);
    }

    public function validateArea($area)
    {
        if ($area === 0) {
            throw new \Exception("Area is not valid");
        }
    }

    public function validateFloor($floor)
    {
        if (!in_array(strtoupper($floor), self::$availableFloors)) {
            throw new \Exception("Floor is not valid");
        }
    }
}