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
   * Unique identifier for this organization.
   *
   * @var string
   */
  protected $id;

  /**
   * Qed42 constructor.
   *
   * @param $price
   */
  public function __construct($id, $price) {
    $this->price = $price;
    $this->id = $id;
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

  /**
   * @return string
   */
  public function id () {
    return $this->id;
  }
}
