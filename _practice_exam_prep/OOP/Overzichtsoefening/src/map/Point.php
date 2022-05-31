<?php namespace map;

use http\Exception\InvalidArgumentException;

class Point{
  private int $x, $y;

  private function __construct($x, $y){
    if($x >= 0 && $x < 100 && ($y >= 0 && $y < 100 )){
      $this->x = $x;
      $this->y = $y;
    } else {
      throw new InvalidArgumentException("The given values are not valid.");
    }
  }

  public static function make($x, $y){
    return new self($x, $y);
  }

  public function manhattanDistance(Point $point) : int{
    return abs($this->x - $point->x) + abs($this->y - $point->y);
  }
}

