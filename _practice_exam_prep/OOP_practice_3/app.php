<?php require_once 'vendor/autoload.php';

use textnode\TextNode;
use textnode\PositionException;

$n=TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
echo PHP_EOL;
try {
  $n->printTextNodeAt(1);
} catch (PositionException $e) {
  print($e->getMessage());
}

try{
  $n->printTextNodeAt(-4);
} catch (PositionException $exception){
  print($exception->getMessage());
}