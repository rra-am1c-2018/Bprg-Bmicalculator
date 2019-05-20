<?php
include("./classes/class_person.php");

// Deze class berekent de BMI waarde bij een gegeven massa en lengte van een persoon
// Bmi is een subclass van Person
class Bmi extends Person {
  // Fields  
  private $bodymass;
  private $bodylength;
  private $bmi_girls = [
                          6 =>['te licht'=>13.92, 'te zwaar'=>17.34, 'obesitas'=>19.65 ],
                          7 =>['te licht'=>14.00, 'te zwaar'=>17.75, 'obesitas'=>20.51 ]  
                       ];
  private $bmi_boys =  [
                          6 =>['te licht'=>14.03, 'te zwaar'=>17.55, 'obesitas'=>19.78 ],
                          7 =>['te licht'=>14.06, 'te zwaar'=>17.92, 'obesitas'=>20.63 ]  
                       ];

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
    $this->sex = $args['sex'] ?? 'onbekend';
  }

  // We kunnen binnen de class ook methods maken (dat zijn gewoon functions)
  private function calculate_bmi() {
    return $this->bodymass / ($this->bodylength * $this->bodylength);  
  }

  private function interpretation_bmi() {
    $bmi = $this->calculate_bmi();
    $interpretation_text_bmi = "";

    // Meenemen van de leeftijd in de berekening
    for ($n=6; $n<=7; $n++ ) {
      switch ($this->age) {
        case $n:
          switch (true) {
            case ($bmi < $this->bmi_girls[$n]['te licht']):
              $interpretation_text_bmi = "Je bent te licht";
              break;
            case ($bmi >= $this->bmi_girls[$n]['te licht'] && $bmi <= $this->bmi_girls[$n]['te zwaar']):
              $interpretation_text_bmi = "Je hebt een gezond gewicht";
              break;
            case ($bmi >= $this->bmi_girls[$n]['te zwaar'] && $bmi <= $this->bmi_girls[$n]['obesitas']):
              $interpretation_text_bmi = "Je bent te zwaar";
              break;
            case ($bmi > $this->bmi_girls[$n]['obesitas']):
              $interpretation_text_bmi = "Je hebt ernstig overgewicht";
              break;            
          }
      }
    }


    // switch (true) {
    //   case ($bmi < 18.5):
    //     $interpretation_text_bmi = "Er is sprake van ondergewicht";
    //     break;
    //   case ($bmi >= 18.5 && $bmi < 25):
    //     $interpretation_text_bmi = "Er is sprake van normaal gewicht";
    //     break;
    //   case ($bmi >= 25 && $bmi < 27):
    //     $interpretation_text_bmi = "Er is sprake van licht overgewicht";
    //     break;
    //   case ($bmi >= 27 && $bmi < 30):
    //     $interpretation_text_bmi = "Er is sprake van matig overgewicht";
    //     break;
    //   case ($bmi >= 30 && $bmi <= 40):
    //     $interpretation_text_bmi = "Er is sprake van ernstig overgewicht";
    //     break;
    //   case ($bmi > 40):
    //     $interpretation_text_bmi = "Er is sprake van ziekelijkgewicht";
    //     break;

    // }
    return $interpretation_text_bmi;
  }

  // Maak een private function make_full_name() en gebruik die in show_bmi
  private function make_full_name() {
    return $this->firstname . " " . $this->infix . " " . $this->lastname;
  }


  public function show_bmi() {
    echo "Beste " . $this->make_full_name() . " jouw bmi is: " . round($this->calculate_bmi(),2) . "<br>" . $this->interpretation_bmi() . "<br><hr>";
  }
}

?>