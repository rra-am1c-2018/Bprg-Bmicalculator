<?php

class Dbase {
  // Fields
  private const SERVERNAME = "localhost";
  private const USERNAME = "bmi_moderator";
  private const PASSWORD = "L31hV7ZPavLZ8ecR";
  private const DATABASE = "bmi_calculator_am1c";
  private $conn;

  // Properties

  // constructor
  public function __construct() {
    $this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DATABASE);
  }

  // methods
  public function insert_record() {
    
  }
}

?>