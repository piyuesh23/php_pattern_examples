<?php

use ObserverExample\Axelerant;
use ObserverExample\Observer;
use ObserverExample\Qed42;

require __DIR__ . '/vendor/autoload.php';

$qed42 = new Qed42('qed42', 10.000);
$axelerant = new Axelerant('axelerant', 20.000);

print 'QED42 Stock Price: ' .  $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' .  $axelerant->getPrice() . PHP_EOL;

$observer = new Observer();
$observer->registerSubject($qed42);
$observer->registerSubject($axelerant);

updatePrice($observer, 2);

function updatePrice(Observer $observer, $multiplier) {
  $observer->notify($multiplier);
}

print 'QED42 Stock Price: ' .  $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' .  $axelerant->getPrice() . PHP_EOL;
