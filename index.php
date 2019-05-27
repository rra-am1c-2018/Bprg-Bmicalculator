<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>BMI Calculator</title>
  </head>
  <body>
    <main>
      <section class="container-fluid"><h1>BMI CALCULATOR</h1></section>
      <section class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <form action="./calculate_bmi.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="firstname">Voornaam</label>
                  <input type="text" class="form-control" id="firstname" placeholder="" name="firtname">
                </div>
                <div class="form-group col-md-4">
                  <label for="infix">tussenvoegsel</label>
                  <input type="text" class="form-control" id="infix" placeholder="" name="infix">
                </div>
                <div class="form-group col-md-4">
                  <label for="lastname">Achternaam</label>
                  <input type="text" class="form-control" id="lastname" placeholder="" name="lastname">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="bodyweight">Gewicht</label>
                  <input type="number" step="any" class="form-control" id="bodyweight" placeholder="" name="bodyweight">
                </div>
                <div class="form-group col-md-3">
                  <label for="bodylength">Lengte</label>
                  <input type="number" step="any" class="form-control" id="bodylength" placeholder="" name="bodylength">
                </div>
                <div class="form-group col-md-3">
                  <label for="age">Leeftijd</label>
                  <input type="number" class="form-control" id="age" placeholder="" name="age">
                </div>
                <div class="form-group col-md-3">
                  <label for="gender">Geslacht</label>
                  <select id="gender" class="form-control" name="gender">
                    <option selected>Kies</option>
                    <option value="girl" >Vrouw</option>
                    <option value="boy">Man</option>
                    <option value="trans">Trans</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">Bereken BMI</button>             
                </div>
              </div>
              
              </form>
          </div>
          <div class="col-3"></div>
        </div>
      
      </section>
      <section class="container">
        <?php 
          if (isset($_POST["test"])) {
            echo "Test: " . $_POST["test"];
          } else {
            echo "Niets";
          }
        ?>
      </section>

    </main>



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>











<?php
  include("./classes/class_bmi.php");
  // We kunnen een object van een class maken met het gereserveerde woord new
  $person1 = new Bmi(['firstname'=>'Arjan',
                      'infix'=>'de',
                      'lastname'=>'Ruijter',
                      'bodymass'=>73,
                      'bodylength'=>1.8,
                      'age'=>6,
                      'sex'=>'boy']);

  // $person1->firstname = "Arjan";
  // $person1->bodymass = 70;
  // $person1->bodylength = 1.8;
  // $person1->set_bodymass(900);

  echo $person1->get_firstname() . "<br>";
  echo $person1->get_bodymass() . "<br>";
  echo $person1->get_bodylength() . "<br>";
  $person1->show_bmi();

  // We kunnen een nieuwe instantie maken van de class Bmi
  $person2 = new Bmi(['firstname'=>'Miranda', 'infix'=>'van', 'lastname'=>'Tegelen', 'bodylength'=>1.65, 'bodymass'=>80, 'age'=>30]);
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