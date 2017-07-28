<?php

namespace VisitorExample\visitables;

use VisitorExample\VisitableInterface;
use VisitorExample\Visitor;

/**
 * Class Clothing
 *
 * @package VisitorExample
 */
class Automobile implements VisitableInterface {

  protected $price;

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

  public function accept (Visitor $visitor) {
    $visitor->visit($this);
  }
}
