<?php require_once 'vendor/autoload.php';

use toneel\Egel;
use toneel\Konijn;
use toneel\Punt;

$punten = [];

for ($i = 0; $i < 10; $i++) {
  $punten[$i] = new Punt(rand(0,100), rand(0,100));
}

foreach ($punten as $punt) {
  $punt->drukAf();
  echo PHP_EOL;
}

print($punten[0]->berekenAfstand($punten[sizeof($punten)-1]));
echo PHP_EOL;

$egel = new Egel(15, 46);
$konijn = new Konijn(14, 45);

echo PHP_EOL;
print($egel->interageer($konijn));
echo PHP_EOL;
print($egel->interageer($egel));
echo PHP_EOL;
echo PHP_EOL;
$konijn->beschrijf();
echo PHP_EOL;
$egel->beschrijf();
echo PHP_EOL;
$konijn->stapLinks();
echo PHP_EOL;
$egel->stapRechts();

echo PHP_EOL;
$konijn->beschrijf();
echo PHP_EOL;
$egel->beschrijf();
echo PHP_EOL;

$acteurs = [];
$acteurs[] = $konijn;
$acteurs[] = $egel;

foreach ($acteurs as $acteur){
  $acteur->beschrijf();
  echo PHP_EOL;
}