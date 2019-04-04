<?php
namespace Drupal\math_filter;

use jlawrence\eos\Parser;

/**
 * Creates a math service.
 */
class CalculatorService {
  public $calculate;

  public function __construct() {
    $this->eq = $eq;
    $this->calculate = '1+2';
  }

  public function solveExpression($expression) {
    if (empty($expression)) {
      return $this->calculate;
    } else {
      return Parser::solve($expression);
    }
  }
}
