<?php

namespace FactoryExample;

use FactoryExample\Phone;
use FactoryExample\CameraPhone;
use FactoryExample\SelfiePhone;
use Exception;

class PhoneFactory {

  public function __construct() {
    // ... //
  }

  public static function createPhone ($type) {
    if (!isset($type)) {
      throw new Exception('Invalid Phone Type.');
    }
    else {
      $classExists = '\FactoryExample\\'.$type.'Phone';
      if (class_exists($classExists)) {
        return new $classExists();
      }
      else {
        throw new Exception('Phone type not found.');
      }
    }
  }
}
