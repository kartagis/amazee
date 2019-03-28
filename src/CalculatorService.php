<?php
namespace Drupal\amazee;

use jlawrence\eos\Parser;

class CalculatorService
{
  public $calculate;
  public $eq = "";
  protected $vars;
  public static $infix;

  public function __construct()
  {
    $this->eq = $eq;
    $this->calculate = '1+2';
  }

  public function solveExpression($expression)
  {
    if (empty($expression)) {
      return $this->calculate;
    } else {
      return Parser::solve($expression);
    }
  }
}
