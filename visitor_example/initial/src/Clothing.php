<?php

namespace VisitorExample;

/**
 * Class Clothing
 *
 * @package VisitorExample
 */
class Clothing {

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
    return $this->price += (($this->price * 18) / 100);
  }
}
