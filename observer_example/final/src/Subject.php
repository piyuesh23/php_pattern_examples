<?php

namespace ObserverExample;

class Subject {

  protected $organizations;

  /**
   * Observer constructor.
   */
  public function __construct () {
    $this->organizations = [];
  }

  /**
   * @param \ObserverExample\Organization $subject
   */
  public function registerObserver(Organization $subject) {
    $this->organizations[$subject->id()] = $subject;
  }

  /**
   * @param \ObserverExample\Organization $subject
   */
  public function unRegisterObserver(Organization $subject) {
    unset($this->organizations[$subject->id()]);
  }

  /**
   * @param $multiplier
   */
  public function notify($multiplier) {
    foreach ($this->organizations as $organization) {
      $organization->updatePrice($multiplier);
    }
  }
}
