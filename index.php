<?php
  include("./classes/class_bmi.php");
  // We kunnen een object van een class maken met het gereserveerde woord new
  $person1 = new Bmi(['firstname'=>'Arjan',
                      'infix'=>'de',
                      'lastname'=>'Ruijter',
                      'bodymass'=>73,
                      'bodylength'=>1.8]);

  // $person1->firstname = "Arjan";
  // $person1->bodymass = 70;
  // $person1->bodylength = 1.8;
  // $person1->set_bodymass(900);

  echo $person1->get_firstname() . "<br>";
  echo $person1->get_bodymass() . "<br>";
  echo $person1->get_bodylength() . "<br>";
  $person1->show_bmi();

  // We kunnen een nieuwe instantie maken van de class Bmi
  $person2 = new Bmi(['firstname'=>'Miranda', 'infix'=>'van', 'lastname'=>'Tegelen', 'bodylength'=>1.65, 'bodymass'=>80]);
  // $person2->firstname = "Miranda";
  // $person2->bodymass = "100";
  // $person2->bodylength = "1.65";

  echo $person2->get_firstname() . "<br>";
  echo $person2->get_bodymass() . "<br>";
  echo $person2->get_bodylength()  . "<br>";
  $person2->show_bmi();


  $person3 = new Bmi(['firstname'=>'Bertje', 'infix'=>'de', 'lastname'=>'Vries', 'bodymass'=>54.8, 'bodylength'=>1.98, 'age'=>6, 'sex'=>'girl']);
  echo $person3->get_firstname() . "<br>";
  echo $person3->get_bodymass() . "<br>";
  echo $person3->get_bodylength()  . "<br>";
  $person3->show_bmi();


?>