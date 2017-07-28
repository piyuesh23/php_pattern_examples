<?php

namespace DecoratorPattern;

class VegSupreme extends Pizza {

  /**
   * @return string
   */
  public function getDescription () {
    return 'Cheeze, Jalepeno, Olives, Onion, Tomatoes, Thin crust';
  }

  /**
   * @return float
   */
  public function getPrice() {
    return 400.00;
  }
}
