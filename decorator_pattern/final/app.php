<?php

use DecoratorPattern\PeppyPaneer;
use DecoratorPattern\PlainPizza;
use DecoratorPattern\VegSupreme;

require __DIR__ . '/vendor/autoload.php';

$basePizza = new PlainPizza();
$vegSupreme = new VegSupreme($basePizza);
$peppyPaneer = new PeppyPaneer($basePizza);

print 'Veg Supreme Ingredients are ' . $vegSupreme->getDescription() . PHP_EOL;
print 'Veg Supreme Price ' . $vegSupreme->getPrice() . PHP_EOL;
print 'Peppy Paneer Ingredients are ' . $peppyPaneer->getDescription() . PHP_EOL;
print 'Peppy Paneer Price ' . $peppyPaneer->getPrice() . PHP_EOL;
