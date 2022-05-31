<?php

include('./util/Occasion.php');
use util\Occasion;

$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];

if(ctype_digit($day) && ctype_digit($month) && ctype_digit($year)){
  $date = Occasion::make($day,$month, $year);
  $date->changeDay(15);
  $date->changeYear(1993);
  $date->print();
  print ("<br>");
  $date->printMonth();
} else {
  header("location: input.html");
}


