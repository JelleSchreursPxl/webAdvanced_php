<?php

namespace workers;

use tools\Tool;

class Carpenter implements Worker
{
  private Tool $tool;

  public function __construct(Tool $tool){
    $this->tool = $tool;
  }

  public function work()
  {
    $this->tool->doSomething();
  }
}