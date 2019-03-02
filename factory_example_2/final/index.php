<?php


// CLIENT CODE.
// With Factory Design Pattern.

require __DIR__ . '/vendor/autoload.php';

use FactoryDemo\BikeFactory;

$bike = BikeFactory::create('Yamaha', 'ABC 100');
$bike->showDetails();

$bike = BikeFactory::create('Kawasaki', 'Ninja');
$bike->showDetails();

$bike = BikeFactory::create('Bajaj', 'Pulsar');
$bike->showDetails();
