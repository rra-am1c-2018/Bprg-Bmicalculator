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
          <div class="col-4"></div>
          <div class="col-4">
            <form action="" method="post">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="firstname">Voornaam</label>
                  <input type="text" class="form-control" id="firstname" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="infix">tussenvoegsel</label>
                  <input type="text" class="form-control" id="infix" placeholder=""">
                </div>
                <div class="form-group col-md-4">
                  <label for="lastname">Achternaam</label>
                  <input type="text" class="form-control" id="lastname" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="firstname">Gewicht</label>
                  <input type="text" class="form-control" id="firstname" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="infix">Lengte</label>
                  <input type="text" class="form-control" id="infix" placeholder=""">
                </div>
                <div class="form-group col-md-3">
                  <label for="lastname">Leeftijd</label>
                  <input type="text" class="form-control" id="lastname" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="lastname">Geslacht</label>
                  <input type="text" class="form-control" id="lastname" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      
      </section>
      <section class="container"></section>

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