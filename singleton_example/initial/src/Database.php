<?php

namespace SingletonExample

/**
 * Database Singleton.
 */
class Database {

  private $d_name;
  private $d_user;
  private $d_pass;

  public function __construct($name, $user, $pass) {
    $this->d_name = $name;
    $this->d_user = $user;
    $this->d_pass = $pass;
  }
}
