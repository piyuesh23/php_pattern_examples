<?php

require __DIR__ . '/vendor/autoload.php';

use FactoryExample\PhoneFactory;

$phoneType = 'Camera';
$phone = PhoneFactory::createPhone($phoneType);
var_dump($phone);

