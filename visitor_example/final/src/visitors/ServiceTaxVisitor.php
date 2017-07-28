<?php

namespace VisitorExample\visitors;

use VisitorExample\VisitableInterface;
use VisitorExample\Visitor;

/**
 * Class ServiceTaxVisitor
 *
 * @package VisitorExample
 */
class ServiceTaxVisitor implements Visitor {

  CONST TAX_MAPPING = [
    'VisitorExample\visitables\Automobile' => 12,
    'VisitorExample\visitables\Clothing' => 10
  ];

  /**
   * {@inheritdoc}
   */
  public function visit (VisitableInterface $visitable) {
    $tax = self::TAX_MAPPING[get_class($visitable)];
    print "Price before applying service tax " . $visitable->getPrice() . PHP_EOL;
    print "Price post applying service tax " . ($visitable->getPrice() + (($visitable->getPrice() * $tax) / 100)) . PHP_EOL;
  }
}
