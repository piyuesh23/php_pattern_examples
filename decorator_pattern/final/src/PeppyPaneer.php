<?php

namespace DecoratorPattern;

class PeppyPaneer extends ToppingDecorator {

  public function __construct (PizzaInterface $pizza) {
    parent::__construct($pizza);
    print_r('Preparing base pizza with ' . $pizza->getDescription() . PHP_EOL);
    print_r('Peppy Paneer with ' . $this->getDescription() . PHP_EOL);
  }

  /**
   * @return string
   */
  public function getDescription () {
    return $this->tempPizza->getDescription() . ' , Cheeze, Jalepeno, Olives, Onion, Tomatoes, Paneer';
  }

  /**
   * @return float
   */
  public function getPrice() {
    return $this->tempPizza->getPrice() + 450.000;
  }
}
