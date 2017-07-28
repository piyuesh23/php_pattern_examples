<?php

namespace DecoratorPattern;

abstract class Pizza {

  /**
   * @return mixed
   */
  abstract public function getDescription ();

  /**
   * return float
   */
  abstract public function getPrice();
}
