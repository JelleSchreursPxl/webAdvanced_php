<?php namespace toneel;

class Konijn extends Acteur
{

  public function interageer(WereldObject $wereldObject)
  {
    return null;
  }

  public function beschrijf()
  {
    print('Ik ben een konijn op positie x = ' . $this->getX() . ', y = ' . $this->getY());
  }
}