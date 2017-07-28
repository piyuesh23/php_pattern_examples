<?php

namespace DecoratorPattern;

class PlainPizza implements PizzaInterface {

  /**
   * {@inheritdoc}
   */
  public function getDescription () {
    return 'Thin crust';
  }

  /**
   * {@inheritdoc}
   */
  public function getPrice() {
    return 50.00;
  }
}
