<?php namespace textnode;

class TextNode
{
  private $nextNode;
  private string $text;
  private static $numberOfNodes = 0;
  private array $nodes = [];

  private function __construct($text)
  {
    $this->nextNode = null;
    $this->text = $text;
    $this->nodes[] = $text;

  }
  public static function makeNode($text)
  {
    return new self($text);
  }

  // de functie addNode voegt een TextNode toe op het einde van
  //een keten van nodes
  public function addNode($text)
  {
    // kijk of nextNode gelijk is aan null
    // indien ja: maak een nieuwe node aan en ken die toe aan
    //nextNode
    if($this->nextNode==null){
      $this->nextNode=self::makeNode($text);
    }
    else{
      // indien nee: roep de methode addNode aan op nextNode
      $this->nextNode->addNode($text);
      $this->nodes[] = $text;
    }
  }

  /**
   * @throws PositionException
   */
  public function printTextNodeAt($i): void
  {
    if($i > 0 || count($this->nodes ) > $i ){
      print($this->nodes[$i -1]);
    } else {
      throw new PositionException('There is no textnode at this position: ' . $i);
    }
  }

  public function printAll()
  {
    print($this->text);
    if($this->nextNode !=null){
      $this->nextNode->printAll();
    }
  }
}