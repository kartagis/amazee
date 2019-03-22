<?php

namespace Drupal\amazee;

class CalculatorService
{
protected $saySomething;

  public function __construct()
  {
    $this->saySomething = "Hello World";
  }

  public function sayHello($name)
  {
    if (empty($name)) {
      return $this->saySomething;
    } else {
      return "Hello ".$name;
    }
  }
}
