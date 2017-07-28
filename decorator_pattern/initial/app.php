<?php

use DecoratorPattern\PeppyPaneer;
use DecoratorPattern\VegSupreme;

require __DIR__ . '/vendor/autoload.php';

$vegSupreme = new VegSupreme();
$peppyPaneer = new PeppyPaneer();

print 'Veg Supreme Ingredients are ' . $vegSupreme->getDescription() . PHP_EOL;
print 'Veg Supreme Price ' . $vegSupreme->getPrice() . PHP_EOL;
print 'Peppy Paneer Ingredients are ' . $peppyPaneer->getDescription() . PHP_EOL;
print 'Peppy Paneer Price ' . $peppyPaneer->getPrice() . PHP_EOL;
