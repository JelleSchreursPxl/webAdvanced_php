<?php namespace toneel;

class Punt
{
  private static int $MAXIMUMGROOTTE = 99;
  private int $x, $y;

  public function __construct($x, $y){
    $this->x = $x;
    $this->y = $y;
  }

  public function getX(){
    return $this->x;
  }

  public function getY(){
    return $this->y;
  }

  public function setX(int $x): void
  {
    $this->x = $x;
    $this->controleer();
  }

  public function setY(int $y): void
  {
    $this->y = $y;
    $this->controleer();
  }

  public function berekenAfstand(Punt $punt){
    return sqrt(pow($this->getX()-$punt->getX(),2)
      + pow($this->getY()-$punt->getY(),2));
  }

  private function controleer(){
    if ($this->x < 0) {
      $this->x = 0;
    }
    if ($this->x > self::$MAXIMUMGROOTTE) {
      $this->x= self::$MAXIMUMGROOTTE;
    }
    if ($this->y < 0) {
      $this->y = 0;
    }
    if ($this->y > self::$MAXIMUMGROOTTE) {
      $this->y = self::$MAXIMUMGROOTTE;
    }
  }

  public function drukAf(){
    print('x = ' . $this->getX() .', y = ' . $this->getY());
  }
}