<?php


namespace ComposerAutoload\Parts;


class Glass {

  /**
   * @var
   */
  private $description;

  /**
   * Glass constructor.
   * @param $description
   */
  public function __construct($description) {
    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getDescription() {
    return $this->description;
  }

}