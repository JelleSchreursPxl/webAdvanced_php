<?php namespace toneel;

abstract class Acteur extends WereldObject implements Beweegbaar
{
  public function __construct($x, $y){
    parent::__construct($x,$y);
  }

  abstract public function interageer(WereldObject $wereldObject);

  public function stapLinks()
  {
    parent::setY($this->getX()-1);
  }

  public function stapRechts()
  {
    parent::setY($this->getX()+1);
  }

  public function stapBoven()
  {
    parent::setY($this->getY()+1);
  }

  public function stapOnder()
  {
    parent::setY($this->getY()-1);
  }
}