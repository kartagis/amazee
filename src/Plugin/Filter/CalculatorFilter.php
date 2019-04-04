<?php
namespace Drupal\math_filter\Plugin\Filter;

use \Drupal\filter\Plugin\FilterBase;
use \Drupal\filter\FilterProcessResult;
use jlawrence\eos\Parser;

/**
 * @Filter(
 *   id = "filter_math",
 *   title = @Translation("Math Filter"),
 *   description = @Translation("Perform calculations and display on node"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class CalculatorFilter extends FilterBase {
  function process($text, $langcode) {
    $array = explode(" ", $text);
    $txt = "";
    foreach($array as $arr) {
      if (preg_match("/[0-9\+\-\*\/]+$/",$arr)) {
        $txt .= " ".Parser::solve($arr,1);
      } else {
        $txt .= " ".$arr;
      }
    }
    return new FilterProcessResult($txt);
  }
}
