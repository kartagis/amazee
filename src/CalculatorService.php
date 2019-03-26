<?php
namespace Drupal\amazee;

use jlawrence\eos\Parser;

class CalculatorService
{
protected $calculate;

  public function __construct()
  {
    $this->calculate = 15;
  }

  public function solveExpression($expression)
  {
    if (empty($variables)) {
      return $this->calculate;
    } else {
      return Parse::solve($expression);
    }
  }
}
