<?php
// Deze class berekent de BMI waarde bij een gegeven massa en lengte van een persoon
class Bmi {
  // Fields
  var $id;
  var $firstname;
  var $infix;
  var $lastname;
  var $bodymass;
  var $bodylength;
  var $bmi;

  // Dit is de constructor van de class. De constructor wordt automagical aangeroepen bij het maken van een object
  function __construct($args = []) {
    // Een dubbele vraagteken ?? heet de coalesce operator
    $this->id = $args['id'] ?? 0;
    $this->firstname = $args['firstname'] ?? 'onbekend';
    $this->infix = $args['infix'] ?? 'onbekend';
    $this->lastname = $args['lastname'] ?? 'onbekend';
    $this->bodymass = $args['bodymass'] ?? 0;
    $this->bodylength = $args['bodylength'] ?? 0.81;
    $this->bmi = 0;
  }

  // We kunnen binnen de class ook methods maken (dat zijn gewoon functions)
  function calculate_bmi() {
    $this->bmi = $this->bodymass / ($this->bodylength * $this->bodylength);
    echo "Beste " . $this->firstname . " " . $this->infix . " " . $this->lastname . " jouw bmi is: " . round($this->bmi,1) . "<br><hr>";
  }
}

?>