<?php namespace toneel;

class Egel extends Acteur
{
  public function __construct($x, $y)
  {
    parent::__construct($x, $y);
  }

  public function interageer(WereldObject $wereldObject)
  {
    $distance = $this->berekenAfstand($wereldObject);
    if($wereldObject instanceof Konijn && $distance < 10){
      return 'Dag konijn';
    }
    if($wereldObject instanceof Egel && $distance < 20){
      return 'Dag egel';
    }
    return null;
  }

  public function beschrijf()
  {
    print('Ik ben een egel op positie x = ' . $this->getX() . ', y = ' . $this->getY());
  }
}