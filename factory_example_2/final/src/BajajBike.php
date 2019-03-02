<?php

namespace FactoryDemo;


class BajajBike {
  public $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function showDetails() {
    echo "Bajaj Bike - " . $this->model;
  }
}
