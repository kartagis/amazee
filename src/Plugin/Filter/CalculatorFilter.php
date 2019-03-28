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
  protected $eq;
  function process($text, $langcode)
  {
    $text = preg_replace("/[A-Za-z]/", "",$text);
    return new FilterProcessResult(Parser::solve(strip_tags($text)));
  }
}
