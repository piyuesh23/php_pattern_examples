<?php

namespace VisitorExample;

/**
 * Interface Visitor
 *
 * @package VisitorExample
 */
interface Visitor {

  /**
   * @param \VisitorExample\VisitableInterface $visitable
   *
   * @return mixed
   */
  public function visit(VisitableInterface $visitable);

}
