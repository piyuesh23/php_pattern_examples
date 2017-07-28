<?php

namespace DecoratorPattern;

class VegSupreme extends ToppingDecorator {

  public function __construct (PizzaInterface $pizza) {
    parent::__construct($pizza);
    print_r('Preparing base pizza with ' . $pizza->getDescription() . PHP_EOL);
    print_r('Veg supreme pizza with ' . $this->getDescription() . PHP_EOL);
  }

  /**
   * @return string
   */
  public function getDescription () {
    return $this->tempPizza->getDescription() . ' , Cheeze, Jalepeno, Olives, Onion, Tomatoes';
  }

  /**
   * @return float
   */
  public function getPrice() {
    return $this->tempPizza->getPrice() + 350.00;
  }
}
