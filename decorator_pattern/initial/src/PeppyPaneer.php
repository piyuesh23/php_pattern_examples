<?php

namespace DecoratorPattern;

/**
 * Class PeppyPaneer.
 *
 * @package DecoratorPattern
 */
class PeppyPaneer extends Pizza {

  /**
   * @return string
   */
  public function getDescription () {
    return 'Cheeze, Jalepeno, Olives, Onion, Paneer, Tomatoes, Thin crust';
  }

  /**
   * @return float
   */
  public function getPrice() {
    return 500.00;
  }
}
