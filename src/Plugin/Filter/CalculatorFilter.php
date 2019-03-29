<?php
namespace Drupal\amazee\Plugin\Filter;

use \Drupal\filter\Plugin\FilterBase;
use \Drupal\filter\FilterProcessResult;
use jlawrence\eos\Parser;

/**
 * @Filter(
 *   id = "filter_amazee",
 *   title = @Translation("My custom text filter"),
 *   description = @Translation("Perform calculations"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class CalculatorFilter extends FilterBase
{
  function process($text, $langcode)
  {
    $array = explode(" ", $text);
    $txt = "";
    foreach($array as $arr) {
      if (preg_match("/[0-9\+\-\*\/]/",$arr)) {
        $txt .= " ". Parser::solve(strip_tags($arr),1);
      } else {
        $txt .= " ".strip_tags($arr);
      }
    }
    return new FilterProcessResult($txt);
  }
}
