<?php

include ('util/Date.php');
include ('util/DateException.php');

use util\Date;
use util\DateException;

$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];

if(ctype_digit($day) && ctype_digit($month) && ctype_digit($year)){

  try {
    $date = new Date($day, $month, $year);
  } catch (DateException $e) {
  }

  $date->print();
  print ("<br>");
  $date->printMonth();
} else {
  header("location: input.html");
}


