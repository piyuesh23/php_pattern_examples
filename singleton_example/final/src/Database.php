<?php


/**
 * Database Singleton.
 */
class Database {

  private static $instance;

  private $d_name;
  private $d_user;
  private $d_pass;

  /**
   * Private constructor to avoid creation of multiple instances.
   */
  private function __construct($name, $user, $pass) {
    $this->d_name = $name;
    $this->d_user = $user;
    $this->d_pass = $pass;
  }

  /**
   * getInstance() is the standard function used to get the instance.
   */
  public static function getInstance() {
    // Make sure only single instance exists by checking of
    // instance already created.
    if (!isset(Database::$instance)) {
      Database::$instance = new Database('db', 'user', 'pass');
    }
    return Database::$instance;
  }
}
