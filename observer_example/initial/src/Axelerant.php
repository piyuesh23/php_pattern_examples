<?php

namespace ObserverExample;

class Axelerant implements Organization {

  /**
   * Stock price.
   *
   * @var float
   */
  protected $price;

  /**
   * Qed42 constructor.
   *
   * @param $price
   */
  public function __construct($price) {
    $this->price = $price;
  }

  /**
   * {@inheritdoc}
   */
  public function updatePrice($update_multiplier) {
    $this->price *= $update_multiplier;
  }

  /**
   * {@inheritdoc}
   */
  public function getPrice() {
    return $this->price;
  }
}
