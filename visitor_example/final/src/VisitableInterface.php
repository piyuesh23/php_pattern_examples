<?php

namespace VisitorExample;

/**
 * Interface VisitableInterface
 *
 * @package VisitorExample
 */
interface VisitableInterface {

  /**
   * @param \VisitorExample\Visitor $visitor
   *
   * @return mixed
   */
  public function accept(Visitor $visitor);

  /**
   * @return float
   */
  public function getPrice();
}
