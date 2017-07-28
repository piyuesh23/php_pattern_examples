<?php


use VisitorExample\visitables\Automobile;
use VisitorExample\visitables\Clothing;
use VisitorExample\visitors\GstVisitor;
use VisitorExample\visitors\ServiceTaxVisitor;

require __DIR__ . '/vendor/autoload.php';

$serviceTaxVisitor = new ServiceTaxVisitor();
$GstVisitor = new GstVisitor();

$jeans = new Clothing(1900.00);
$baleno = new Automobile(900000.00);

print 'Clothing Price ' . $jeans->getPrice() . PHP_EOL;
print 'Automobile Price ' . $baleno->getPrice() . PHP_EOL;

$jeans->accept($serviceTaxVisitor);
$baleno->accept($serviceTaxVisitor);

$jeans->accept($GstVisitor);
$baleno->accept($GstVisitor);
