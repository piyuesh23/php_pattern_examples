<?php
namespace ComposerAutoload;

use ComposerAutoload\Parts\Door;
use ComposerAutoload\Parts\Glass;

class Car {

  /**
   * Car constructor.
   */
  public function __construct(Door $door, Glass $glass) {
    print "Initialized a car";
    print $door->getDescription();
    print $glass->getDescription();
  }

}
