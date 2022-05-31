<?php namespace util;

use Error;

class Occasion
{
  private int $day;
  private int $month;
  private int $year;

  private static array $MONTHS = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
  const NUMBER_OF_DAYS_PER_MONTH = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

  private function __construct($day = 1, $month = 1, $year = 2008 ){
    if(!is_numeric($day) && !is_numeric($month) && !is_numeric($year)){
      throw new Error('This date can not be configured');
    }
    $this->day = $day;
    $this->month = $month;
    $this->year = $year;
  }

  public static function make($day = 1, $month = 1, $year = 2008 ): Occasion
  {
    return new self($day, $month, $year);
  }

  public function print() : void{
    printf("%d/%d/%d",$this->day,$this->month,$this->year) ;
  }

  public function printMonth() : void{
    printf("%d/%s/%d", $this->day, self::$MONTHS[$this->month -1], $this->year);
  }


  public function getDay(): int
  {
    return $this->day;
  }


  public function getMonth(): int
  {
    return $this->month;
  }


  public function getYear(): int
  {
    return $this->year;
  }


  public function changeDay(int $day): void
  {
    if($day < self::NUMBER_OF_DAYS_PER_MONTH[$this->month -1]){
      $this->day = $day;
    } else {
      throw new Error("The month doesn't have the amount of days given");
    }

  }

  public function changeMonth(int $month): void
  {
    if($month >= 1 && $month <= 12 ){
      $this->month = $month;
    } else {
      throw new Error("There are only twelve months in a year");
    }

  }


  public function changeYear(int $year): void
  {
    $this->year = $year;
  }

}