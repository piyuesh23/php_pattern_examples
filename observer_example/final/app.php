<?php

use ObserverExample\Axelerant;
use ObserverExample\Qed42;
use ObserverExample\Subject;

require __DIR__ . '/vendor/autoload.php';

$qed42 = new Qed42('qed42', 10.000);
$axelerant = new Axelerant('axelerant', 20.000);

print 'QED42 Stock Price: ' .  $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' .  $axelerant->getPrice() . PHP_EOL;

$subject = new Subject();
$subject->registerObserver($qed42);
$subject->registerObserver($axelerant);

updatePrice($subject, 2);

function updatePrice(Subject $subject, $multiplier) {
  $subject->notify($multiplier);
}

print 'QED42 Stock Price: ' .  $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' .  $axelerant->getPrice() . PHP_EOL;
