<?php
require_once 'vendor/autoload.php';

use tools\Axe;
use tools\Broom;
use workers\Carpenter;
use workers\Handyman;

$broom = new Broom();
$axe = new Axe();
$handyman = new Handyman($broom);
$carpenter = new Carpenter($axe);

$handyman->work();
echo PHP_EOL;
$carpenter->work();