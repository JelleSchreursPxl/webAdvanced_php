<?php
require_once ('math.php');
$number = $_GET['input'];
if((is_numeric($number)) || ctype_digit($number) && (int)$number < 0){
  if($number < 100){
    echo fibonacci($number);
  }
} else {
  echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: white !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.html">
                <figure style="overflow: hidden; height: 72px; width: auto;">
                    <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/14849.png" alt="logo" style="height: 88px; width: auto;">
                </figure></a>
            <div class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2"><a href="../practice_3_input_numbers/input.html">input one: numbers</a></li>
                    <li class="nav-item mx-2"><a href="../practice_4_processing/index.html">processing</a></li>
                    <li class="nav-item mx-2"><a href="../practice_5_whole_number/index.html">whole number</a></li>
                    <li class="nav-item mx-2"><a href="../practice_6_fibonacci/index.html">fibonnaci</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <div class="container">
        <section>
            <h5>Practice four</h5>
            <p>
                In ingave.html kan een geheel getal ingegeven worden. Via de submit-knop wordt de
                gebruiker doorverwezen naar verwerk.php
                In verwerk.php wordt de ingave eerst gecontroleerd, enkel gehele getallen gelegen tussen
                0 en 100 worden aanvaard. Van de ingave wordt de fibonacci-waarde berekend en
                afgedrukt. Maak hiervoor de functie faculteit in het bestand wiskunde.php en laad dit
                bestand via require_once. Het resultaat (of misse ingave) wordt afgedrukt.
                Maak gebruik van een recursieve uitwerking van de fibonacci-reeks:
                fibonacci(0)=0
                fibonacci(1)=1
                fibonacci(N)= fibonacci(N-2)+ fibonacci(N-1) voor N>=2
                Eventueel kan je gebruik maken van memoization om onnodige function-calls te vermijden
                (zie ook onderstaande referentie voor de scope van static variables in functions
                https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static
                )
            </p>
        </section>
                <form class="form-group" action="index.html" method="post">
                  <label><strong>The given input was invalid!</strong></label>
                  <br>
                  <input class="btn btn-danger" type="submit" value="return">
                </form>
                </div>
            </body>
          </html>';
}