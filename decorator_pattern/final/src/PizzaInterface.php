<?php

namespace DecoratorPattern;

/**
 * Interface PizzaInterface
 */
interface PizzaInterface {

  /**
   * @return mixed
   */
  public function getDescription();

  /**
   * @return mixed
   */
  public function getPrice();
}
