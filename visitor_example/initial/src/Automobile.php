<?php

namespace VisitorExample;

/**
 * Class Clothing
 *
 * @package VisitorExample
 */
class Automobile {

  /**
   * Clothing constructor.
   *
   * @param $price
   */
  public function __construct ($price) {
    $this->price = $price;
  }

  /**
   * @return mixed
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * @return float|int
   */
  public function calculateGst() {
    return $this->price += (($this->price * 28) / 100);
  }
}
