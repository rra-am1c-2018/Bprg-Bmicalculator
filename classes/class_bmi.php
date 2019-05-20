<?php
include("./classes/class_person.php");

// Deze class berekent de BMI waarde bij een gegeven massa en lengte van een persoon
// Bmi is een subclass van Person
class Bmi extends Person {
  // Fields  
  private $bodymass;
  private $bodylength;

  // Set-method voor bodymass field
  public function set_bodymass($bodymass) {
    if ($bodymass < 3 || $bodymass > 600) {
      $this->bodymass = 0;
      echo "Dit gewicht is niet geldig<br>";
    } else {
      $this->bodymass = $bodymass;
    }
    return $this->bodymass;
  }
  // Get-method voor bodymass field
  public function get_bodymass() {
    return "Gewicht = " . $this->bodymass . "kg";
  }

  // Set-method voor private field bodylength om het af te schermen (Encapsulation)
  public function set_bodylength($bodylength) {
    if ($bodylength < 0.5 || $bodylength > 2.75) {
      echo "Bij deze lengte kunnen we geen BMI berekenen omdat het geen betekenis heeft";
    } else {
      $this->bodylength = $bodylength;
    }
  }
  // Get-method voor private field bodylength
  public function get_bodylength() {
    return "Lichaamslengte = " . $this->bodylength . "m";
  }

  public function get_firstname() {
    return $this->firstname;
  }



  // Dit is de constructor van de class. De constructor wordt automagical aangeroepen bij het maken van een object
  function __construct($args = []) {
    // Een dubbele vraagteken ?? heet de coalesce operator
    $this->id = $args['id'] ?? 0;
    $this->firstname = $args['firstname'] ?? 'onbekend';
    $this->infix = $args['infix'] ?? 'onbekend';
    $this->lastname = $args['lastname'] ?? 'onbekend';
    $this->bodymass = $args['bodymass'] ?? 0;
    $this->bodylength = $args['bodylength'] ?? 0.81;
    $this->age = $args['age'] ?? 'onbekend';
  }

  // We kunnen binnen de class ook methods maken (dat zijn gewoon functions)
  private function calculate_bmi() {
    return $this->bodymass / ($this->bodylength * $this->bodylength);  
  }

  private function interpretation_bmi() {
    $interpretation_text_bmi = "test";
    return $interpretation_text_bmi;
  }

  // Maak een private function make_full_name() en gebruik die in show_bmi
  private function make_full_name() {
    return $this->firstname . " " . $this->infix . " " . $this->lastname;
  }


  public function show_bmi() {
    echo "Beste " . $this->make_full_name() . " jouw bmi is: " . round($this->calculate_bmi(),1) . ". Dit betekent:" . $this->interpretation_bmi() . "<br><hr>";
  }
}

?>