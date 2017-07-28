<?php

namespace FactoryExample

use FactoryExample\Phone;
use FactoryExample\CameraPhone;
use FactoryExample\SelfiePhone;

class PhoneFactory {

  public function __construct() {
    // ... //
  }

  public static function createPhone ($type) {
    if (!isset($type)) {
      throw new Exception('Invalid Phone Type.');
    }
    else {
      $className = $type.'Phone';
      // Assuming Class files are already loaded using autoload concept
      if (class_exists($className)) {
        return new $className();
      }
      else {
        throw new Exception('Phone type not found.');
      }
    }
  }
}
