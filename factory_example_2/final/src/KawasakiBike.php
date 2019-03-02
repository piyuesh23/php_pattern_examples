<?php

namespace FactoryDemo;


class KawasakiBike {
  public $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function showDetails() {
    echo "Kawasaki Bike - " . $this->model;
  }
}
