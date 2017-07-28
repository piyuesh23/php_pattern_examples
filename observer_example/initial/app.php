<?php

use ObserverExample\Axelerant;
use ObserverExample\Qed42;

require __DIR__ . '/vendor/autoload.php';

// Initialize stock price for QED42 & Axelerant.
$qed42 = new Qed42(10.000);
$axelerant = new Axelerant(12.000);

print 'QED42 Stock Price: ' .  $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' .  $axelerant->getPrice() . PHP_EOL;

// Update stock price for QED42 & Axelerant.
$updated_stock_price_multiplier = 2;
update_stock_price($updated_stock_price_multiplier, $qed42, $axelerant);

print 'QED42 Stock Price: ' . $qed42->getPrice() . PHP_EOL;
print 'Axelerant Stock Price: ' . $axelerant->getPrice() . PHP_EOL;

// Function to update stock price & print updated stock price.
function update_stock_price($updated_stock_price_multiplier, $qed42, $axelerant) {
  $qed42->updatePrice($updated_stock_price_multiplier);
  $axelerant->updatePrice($updated_stock_price_multiplier);
}
