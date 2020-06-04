<?php

namespace App\Robot\Services;

use App\Robot\Services\Floor\Hard;
use App\Robot\Services\Floor\Carpet;
use App\Robot\Services\Floor\FloorInstances;
use PHPUnit\Util\Exception;

use App\Services\Floor\IFloor;

class CleanFloor
{

    protected $area;
    protected $floor;
    protected $cleaningFloor;
    /**
     * It takes 30 secs to fully charge the robot
     * @var int
     */
    protected $fullChargeTime = 30;

    /** In one charge robot can clean for 60 secs
     * @var int
     */
    protected $workTimeInOneCharge = 60;

    public function __construct($floor, $area)
    {
        echo " \n ::::: Initializing Robot Clean Floor Service ::::: ";
        $this->area = $area;
        $this->floor = trim(ucwords($floor));
        $this->setFloor();
    }

    public function setFloor()
    {
        
        echo " \n ::::: Setting Cleaning Floor ::::: ";
        $this->cleaningFloor = FloorInstances::getFloorInstance($this->floor, $this->area);
    }

    public function run()
    {
        $this->cleaningFloor->clean();
    }
}