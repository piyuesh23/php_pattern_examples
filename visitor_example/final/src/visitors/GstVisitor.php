<?php

namespace VisitorExample\visitors;

use VisitorExample\VisitableInterface;
use VisitorExample\Visitor;

/**
 * Class GstVisitor
 *
 * @package VisitorExample
 */
class GstVisitor implements Visitor {

  CONST TAX_MAPPING = [
    'VisitorExample\visitables\Automobile' => 28,
    'VisitorExample\visitables\Clothing' => 18
  ];

  /**
   * {@inheritdoc}
   */
  public function visit (VisitableInterface $visitable) {
    $tax = self::TAX_MAPPING[get_class($visitable)];
    print "Price before applying GST " . $visitable->getPrice() . PHP_EOL;
    print "Price post applying GST " . ($visitable->getPrice() + (($visitable->getPrice() * $tax) / 100)) . PHP_EOL;
  }
}
