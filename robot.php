<?php

require 'vendor/autoload.php';
use App\Robot\Services\CleanFloor;
use App\Robot\Validations\CleanFloorRequest;

$arg = getopt(null, ["area:", "floor:"]);

CleanFloorRequest::validate($arg['floor'], $arg['area']);
$robot = new CleanFloor($arg['floor'], $arg['area']);
$robot->run();
?>
