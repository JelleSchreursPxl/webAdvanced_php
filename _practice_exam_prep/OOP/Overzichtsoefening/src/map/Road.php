<?php namespace map;

class Road{
  private array $points;

  private function __construct(){
    $this->points = [];
  }

  public static function make(){
    return new self();
  }

  public function addPoint(Point $point){
    $this->points[] = $point;
  }

  public function manhattanDistance(){
    $sum = 0;
    foreach ($this->points as $point){
      for ($i = 1; $i < sizeof($this->points); $i++){
        $sum += $point->manhattanDistance($this->points[$i]);
      }
    }
    return $sum;
  }
}
