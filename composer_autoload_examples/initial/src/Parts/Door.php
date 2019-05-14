<?php
namespace ComposerAutoload\Parts;

class Door {

  /**
   * @var
   */
  private $description;

  /**
   * Door constructor.
   * @param $description
   */
  public function __construct($description) {
    $this->description = $description;
  }

  public function getDescription() {
    return $this->description;
  }
}