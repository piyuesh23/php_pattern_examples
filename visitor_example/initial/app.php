<?php

use VisitorExample\Automobile;
use VisitorExample\Clothing;

require __DIR__ . '/vendor/autoload.php';

$jeans = new Clothing(1900.00);
$baleno = new Automobile(900000.00);

print 'Clothing Price ' . $jeans->getPrice() . PHP_EOL;
print 'Automobile Price ' . $jeans->getPrice() . PHP_EOL;

$jeans->calculateGst();
$baleno->calculateGst();

print 'Clothing Price post GST ' . $jeans->getPrice() . PHP_EOL;
print 'Automobile Price post GST ' . $baleno->getPrice() . PHP_EOL;
