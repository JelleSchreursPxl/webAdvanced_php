<?php namespace toneel;

abstract class WereldObject extends Punt
{
  private Punt $positie;

  public function __construct($x, $y){
    parent::__construct($x, $y);
  }

  public function setX(int $x): void
  {
    parent::setX($x);
  }
}