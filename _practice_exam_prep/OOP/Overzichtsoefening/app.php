<?php require_once 'vendor/autoload.php';

use map\Road;
use map\Point;

$road=Road::make();
$point1=Point::make(1,2);
$road->addPoint($point1);
$point2=Point::make(3,4);
$road->addPoint($point2);
$point3=Point::make(5,9);
$road->addPoint($point3);
print($point1->manhattanDistance($point2));
print("\n");
print($road->manhattanDistance());
print("\n");

