<?php

namespace FactoryDemo;


class YamahaBike {
  public $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function showDetails() {
    echo "Yamaha Bike - " . $this->model;
  }
}
