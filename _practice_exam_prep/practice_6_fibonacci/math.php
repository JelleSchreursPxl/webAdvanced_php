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

function fibonacci($number): int{
  if ($number == 0) {
    return 0;
  } else if ($number == 1) {
    return 1;
  } else {
    return fibonacci($number - 1) + fibonacci($number - 2);
  }
}
