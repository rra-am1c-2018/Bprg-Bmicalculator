<?php
  include("./classes/class_dbase.php");

  $dbase = new Dbase();

  // Roep de method insert_record() aan in de class Dbase()
  $dbase->insert_record($_POST);
?>


