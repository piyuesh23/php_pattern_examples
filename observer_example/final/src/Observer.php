<?php

namespace ObserverExample;

class Observer {

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
  public function registerSubject(Organization $subject) {
    $this->organizations[$subject->id()] = $subject;
  }

  /**
   * @param \ObserverExample\Organization $subject
   */
  public function unRegisterSubject(Organization $subject) {
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
