<?php

require __DIR__ . '/vendor/autoload.php';

use Pimple\Container;

$container = new Container();
require __DIR__ . '/config.php';
require __DIR__ . '/services.php';

/** @var \DependencyInjectionDemo\SubscriberManager $subscriberManager */
$subscriberManager = $container['subscriberManager'];
$subscriberManager->notifySubscribers();