<?php
require 'src/Car.php';
require 'src/Parts/Door.php';
require 'src/Parts/Glass.php';

use ComposerAutoload\Car;
use ComposerAutoload\Parts\Door;
use ComposerAutoload\Parts\Glass;

$glass = new Glass("This is a toughened glass.");
$door = new Door("This is a red car door.");
$car = new Car($door, $glass);