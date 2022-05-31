<?php namespace util;

use Error;

class Date
{
  private int $day;
  private int $month;
  private int $year;

  private static array $MONTHS = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
  const NUMBER_OF_DAYS_PER_MONTH = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

  /**
   * @throws DateException
   */
  public function __construct($day = 1, $month = 1, $year = 2008 ){
    $this->setDay($day);
    $this->setMonth($month);
    $this->setYear($year);
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

  /**
   * @throws DateException
   */
  public function setDay(int $day): void
  {
    $days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
    if ($day > $days || $day < 1) {
      throw new DateException($day . ' is not day of month ' . self::$MONTHS[$this->month - 1] . '.');
    } else {
      $this->day = $day;
    }
  }

  /**
   * @throws DateException
   */
  public function setMonth(int $month): void
  {
    if($month > count(self::$MONTHS)){
      throw new DateException("There are only 12 months in a year");
    } else if($month < 1){
      throw new DateException("A month" .$month . "doesn't exist.");
    }
    $this->month = $month;
  }

  public function setYear(int $year): void
  {
    $this->year = $year;
  }

}