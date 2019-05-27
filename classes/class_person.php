<?php

class Person {
  // Fields
  protected $id;
  protected $firstname;
  protected $infix;
  protected $lastname;
  protected $age;
  protected $sex;

  protected function set_sex($sex) {
    if ( $sex == 'girl')
      $this->sex = 'girl';
    else if ($sex == 'boy'){
      $this->sex = 'boy';
    }
  }
}

?>