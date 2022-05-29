<?php
function faculty(int $number): int{
  $result = 1;
  while($number > 0)
  {
    $result *= $number;
    $number--;
  }
  return $result;
}