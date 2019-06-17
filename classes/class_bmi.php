<?php
include("./classes/class_person.php");

// Deze class berekent de BMI waarde bij een gegeven massa en lengte van een persoon
// Bmi is een subclass van Person
class Bmi extends Person {
  // Fields  
  private $bodymass;
  private $bodylength;
  private $bmi_girl = [
                          6 =>['te licht'=>13.92, 'te zwaar'=>17.34, 'obesitas'=>19.65 ],
                          7 =>['te licht'=>14.00, 'te zwaar'=>17.75, 'obesitas'=>20.51 ],  
                          8 =>['te licht'=>14.16, 'te zwaar'=>18.35, 'obesitas'=>21.57 ],  
                          9 =>['te licht'=>14.42, 'te zwaar'=>19.07, 'obesitas'=>22.81 ],  
                          10 =>['te licht'=>14.78, 'te zwaar'=>19.86, 'obesitas'=>24.11 ], 
                          11 =>['te licht'=>15.25, 'te zwaar'=>20.74, 'obesitas'=>25.42 ], 
                          12 =>['te licht'=>15.83, 'te zwaar'=>21.68, 'obesitas'=>26.67 ],  
                          13 =>['te licht'=>16.43, 'te zwaar'=>22.58, 'obesitas'=>27.76 ],  
                          14 =>['te licht'=>17.01, 'te zwaar'=>23.34, 'obesitas'=>28.57 ],  
                          15 =>['te licht'=>17.52, 'te zwaar'=>23.94, 'obesitas'=>29.11 ],  
                          16 =>['te licht'=>17.95, 'te zwaar'=>24.37, 'obesitas'=>29.43 ]
                       ];
  private $bmi_boy =  [
                          6 =>['te licht'=>14.03, 'te zwaar'=>17.55, 'obesitas'=>19.78 ],
                          7 =>['te licht'=>14.06, 'te zwaar'=>17.92, 'obesitas'=>20.63 ],  
                          8 =>['te licht'=>14.20, 'te zwaar'=>18.44, 'obesitas'=>21.60 ],
                          9 =>['te licht'=>14.41, 'te zwaar'=>19.10, 'obesitas'=>22.77 ],
                          10 =>['te licht'=>14.69, 'te zwaar'=>19.84, 'obesitas'=>24.00 ],
                          11 =>['te licht'=>15.03, 'te zwaar'=>20.55, 'obesitas'=>25.10 ],
                          12 =>['te licht'=>15.47, 'te zwaar'=>21.22, 'obesitas'=>26.02 ],
                          13 =>['te licht'=>15.98, 'te zwaar'=>21.91, 'obesitas'=>26.84 ],
                          14 =>['te licht'=>16.54, 'te zwaar'=>22.62, 'obesitas'=>27.63 ],
                          15 =>['te licht'=>17.13, 'te zwaar'=>23.29, 'obesitas'=>28.30 ],
                          16 =>['te licht'=>17.70, 'te zwaar'=>23.90, 'obesitas'=>28.88 ] 
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
  public function calculate_bmi() {
    return $this->bodymass / ($this->bodylength * $this->bodylength);  
  }

  private function interpretation_bmi() {
    $bmi = $this->calculate_bmi();;
    $interpretation_text_bmi = "";
    $sex = "bmi_" . $this->sex;

    if ( $this->age <= 16 ) {
    // Meenemen van de leeftijd in de berekening
      for ($n=6; $n<=16; $n++ ) {
        switch ($this->age) {
          case $n:
            switch (true) {
              case ($bmi < $this->$sex[$n]['te licht']):
                $interpretation_text_bmi = "Je bent te licht";
                break;
              case ($bmi >= $this->$sex[$n]['te licht'] && $bmi <= $this->$sex[$n]['te zwaar']):
                $interpretation_text_bmi = "Je hebt een gezond gewicht";
                break;
              case ($bmi >= $this->$sex[$n]['te zwaar'] && $bmi <= $this->$sex[$n]['obesitas']):
                $interpretation_text_bmi = "Je bent te zwaar";
                break;
              case ($bmi > $this->$sex[$n]['obesitas']):
                $interpretation_text_bmi = "Je hebt ernstig overgewicht";
                break;            
            }
        }
      }

    } else {
      switch (true) {
        case ($bmi < 18.5):
          $interpretation_text_bmi = "Er is sprake van ondergewicht";
          break;
        case ($bmi >= 18.5 && $bmi < 25):
          $interpretation_text_bmi = "Er is sprake van normaal gewicht";
          break;
        case ($bmi >= 25 && $bmi < 27):
          $interpretation_text_bmi = "Er is sprake van licht overgewicht";
          break;
        case ($bmi >= 27 && $bmi < 30):
          $interpretation_text_bmi = "Er is sprake van matig overgewicht";
          break;
        case ($bmi >= 30 && $bmi <= 40):
          $interpretation_text_bmi = "Er is sprake van ernstig overgewicht";
          break;
        case ($bmi > 40):
          $interpretation_text_bmi = "Er is sprake van ziekelijkgewicht";
          break;
      }
    }
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