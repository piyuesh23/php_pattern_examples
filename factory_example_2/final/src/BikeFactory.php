<?php

namespace FactoryDemo;

class BikeFactory {

  public function create($bike, $model) {
    $class = 'FactoryDemo\\' . $bike . 'Bike';
    if (class_exists($class)) {
      return new $class($model);
    }
  }

}
