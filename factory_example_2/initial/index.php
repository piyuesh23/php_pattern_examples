<?php


// CLIENT CODE.
// Without Factory Design Pattern.

require __DIR__ . '/vendor/autoload.php';

use FactoryDemo\YamahaBike;
use FactoryDemo\KawasakiBike;

$yamaha = new YamahaBike('ABC 100');
$yamaha->showDetails();

$kawasaki = new KawasakiBike('NINJA');
$kawasaki->showDetails();
