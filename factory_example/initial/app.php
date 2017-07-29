<?php

require __DIR__ . '/vendor/autoload.php';

use FactoryExample\Phone;
use FactoryExample\CameraPhone;
use FactoryExample\SelfiePhone;

$phoneType = 'Camera';

switch ($phoneType) {
  case 'Camera':
    $mobile = new CameraPhone();
    break;

  case 'Selfie':
    $mobile = new SelfiePhone();
    break;

  default:
    $mobile1 = new Phone();
    break;
}
