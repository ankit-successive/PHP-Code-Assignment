<?php

namespace App\Robot\Services\Floor;


use App\Robot\Services\Floor\Hard;
use App\Robot\Services\Floor\Carpet;
use App\Robot\Services\Floor\IFloor;


class FloorInstances
{
    /**
     * 
     * @var array
     */
    public static function getFloorInstance($floor, $area)
    {
        $instance = array(
            "hard" => new Hard($area),
            "carpet" => new Carpet($area),
        );

        return $instance[strtolower($floor)];
    }

}