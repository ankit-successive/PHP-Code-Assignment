<?php

use PHPUnit\Framework\TestCase;
use App\Robot\Services\CleanFloor;

class CleanFloorTest extends TestCase
{
    public function floorInstancetest(): void
    {
        $this->expectException(TypeError::class);
        new FloorCleaning('invalid', 120);
    }
}