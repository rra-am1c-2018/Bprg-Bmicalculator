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
  public function insert_record($raw_data) {
    $firstname = $this->sanitize($raw_data["firstname"]);
    $infix = $this->sanitize($raw_data["infix"]);
    $lastname = $this->sanitize($raw_data["lastname"]);
    $bodyweight = $this->sanitize($raw_data["bodyweight"]);
    $bodylength = $this->sanitize($raw_data["bodylength"]);
    $age = $this->sanitize($raw_data["age"]);
    $gender = $this->sanitize($raw_data["gender"]);

    $sql = "INSERT INTO `bmi_data` (`id`,
                                    `firstname`, 
                                    `infix`, 
                                    `lastname`, 
                                    `bodyweight`, 
                                    `bodylength`, 
                                    `age`, 
                                    `sex`) 
                            VALUES (NULL, 
                                    '$firstname', 
                                    '$infix', 
                                    '$lastname', 
                                    '$bodyweight', 
                                    '$bodylength', 
                                    '$age', 
                                    '$gender')";

    echo $sql; exit();
  }

  private function sanitize($raw_data) {
    $data = htmlspecialchars($raw_data);
    $data = $this->conn->real_escape_string($data);
    return $data;
  }
}

?>