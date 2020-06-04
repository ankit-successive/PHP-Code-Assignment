<?php

namespace App\Robot\Services\Floor;

use App\Robot\Services\Floor\IFloor;
use App\Robot\Services\Battery;

class Hard implements IFloor
{
    /**
     * Takes 1 sec to cleaning 1 meter square
     * @var int
     */
    protected $cleaningTimePerMeterSquare = 1;

    protected $area;

    public function __construct($area)
    {
        $this->area = $area;
        $this->batteryInstance = new Battery();
    }

    public function clean()
    {
        echo " \n ::::: Total area to be cleaned: ".$this->area ." :::::";
        echo " \n ::::: Time taken per square meter: ".$this->cleaningTimePerMeterSquare." :::::";
        $area = $this->area;

        while( $area) {
            $area = $area - ($this->batteryInstance->getWorkTimeInOneCharge() / $this->cleaningTimePerMeterSquare);

            if($area <= 0) {
                echo " \n ::::: Floor Cleaning Done ::::: \n";
                return true;
            }
            echo " \n ::::: Remaining Area to be cleaned: ".$area. " ::::: ";

            if ($area / ($this->batteryInstance->getWorkTimeInOneCharge() / $this->cleaningTimePerMeterSquare)) {
                $this->batteryInstance->charge();
            }
        }
    }

}