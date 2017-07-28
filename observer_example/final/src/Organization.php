<?php

namespace ObserverExample;

interface Organization {

  /**
   * @param $price
   */
  public function updatePrice ($price);

  /**
   * @return float
   */
  public function getPrice ();

  /**
   * @return string
   */
  public function id();
}
