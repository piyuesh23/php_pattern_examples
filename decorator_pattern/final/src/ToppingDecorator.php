<?php

namespace DecoratorPattern;

abstract class ToppingDecorator implements PizzaInterface {

  /**
   * @var
   */
  protected $tempPizza;

  public function __construct(PizzaInterface $pizza) {
    $this->tempPizza = $pizza;
  }

  /**
   * @return mixed
   */
  public function getDescription () {
    return $this->tempPizza->getDescription();
  }

  /**
   * @return mixed
   */
  public function getCost() {
    return $this->tempPizza->getCost();
  }
}
