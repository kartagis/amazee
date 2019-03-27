<?php
namespace Drupal\amazee;

use jlawrence\eos\Parser;

class CalculatorService
{
  protected $calculate;
  protected $eq = "";
  protected $vars;
  protected $infix;

  public function __construct()
  {
    $this->eq = "";
    //$this->vars = $vars;
  }

  public function solveExpression($expression = "")
  {
    if (empty($expression)) {
      return $this->calculate;
    } else {
      return Parse::solve($expression);
    }
  }
}
