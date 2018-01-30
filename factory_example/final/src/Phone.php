<?php

namespace FactoryExample;

/**
 * Shapes factory.
 */
class Phone {
  protected $type = 'Normal Phone';

  public function __construct() {
    print_r($this->type . ' has been created');
  }
}
