<?php
  include("class_bmi.php");
  // We kunnen een object van een class maken met het gereserveerde woord new
  $person1 = new Bmi(['firstname'=>'Arjan', 'infix'=>'de', 'lastname'=>'Ruijter', 'bodymass'=>70, 'bodylength'=>1.8]);

  // $person1->firstname = "Arjan";
  // $person1->bodymass = 70;
  // $person1->bodylength = 1.8;
  $person1->set_bodymass(900);

  echo $person1->firstname . "<br>";
  echo $person1->get_bodymass() . "<br>";
  echo $person1->get_bodylength() . "<br>";
  $person1->show_bmi();

  // We kunnen een nieuwe instantie maken van de class Bmi
  $person2 = new Bmi(['firstname'=>'Miranda', 'infix'=>'van', 'lastname'=>'Tegelen', 'bodymass'=>100, 'bodylength'=>1.45]);
  // $person2->firstname = "Miranda";
  // $person2->bodymass = "100";
  // $person2->bodylength = "1.45";

  echo $person2->firstname . "<br>";
  echo $person2->get_bodymass() . "<br>";
  echo $person2->get_bodylength()  . "<br>";
  $person2->show_bmi();


  $person3 = new Bmi(['firstname'=>'Bertje', 'infix'=>'de', 'lastname'=>'Vries', 'bodymass'=>200, 'bodylength'=>1.95]);
  echo $person3->firstname . "<br>";
  echo $person3->get_bodymass() . "<br>";
  echo $person3->get_bodylength()  . "<br>";
  $person3->show_bmi();


?>