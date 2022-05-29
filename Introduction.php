<?php
$numberOfLines = 7;
for($i = 1; $i <= $numberOfLines; $i++){
  for($j = 1; $j <= $i; $j++){
  echo "#";
  }
  echo "</br>";
}

echo "</br>";

for($i = 0; $i <= $numberOfLines; $i++){
  for($j = $numberOfLines-$i; $j >= 1; $j--){
  echo "#";
  }
  echo "</br>";
}

echo "</br>";