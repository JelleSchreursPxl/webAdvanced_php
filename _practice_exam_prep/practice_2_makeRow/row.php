<?php
// function without default value included
/* function makeARow(int $min, int $max) : array {
    $array = (array) null;
     if($min < $max){
       for ($i = $min; $i <= $max; $i++){
         $array[] = $i;
       }
     }
     return $array;
   }
*/

// function with default value included (only in leap parameter)
 function makeARowWithStep(int $min, int $max, int $leap = 1) : array {
   $arrayWithLeapStep = (array) null;
   if($min < $max){
     for($i = $min; $i <= $max; $i += $leap){
       $arrayWithLeapStep[] = $i;
     }
   }else {
       for($j = $min; $j >= $max; $j -= $leap){
         $arrayWithLeapStep[] = $j;
     }
   }
   return $arrayWithLeapStep;
 }
 echo json_encode(makeARowWithStep(2,16));
 echo '</br>';
 echo json_encode(makeARowWithStep(1,115,7));