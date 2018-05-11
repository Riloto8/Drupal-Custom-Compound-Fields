<?php

namespace Drupal\testfield\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

/**
 * Plugin implementation of the 'TestFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "TestFormatter",
 *   label = @Translation("Test"),
 *   field_types = {
 *     "Test"
 *   }
 * )
 */

class TestFormatter extends FormatterBase {

  /**
   * Define how the field type is showed.
   *
   * Inside this method we can customize how the field is displayed inside
   * pages.
   */


 public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements =  [
     '#type' => 'markup',
     '#markup' => 'Value from the checkbox number 1: ' . $items->check1 . ',' .
     'Value from the checkbox two: ' . $items->check2 . ',' .
     'Value from the checkbox three: '.$items->check3,
];
    return $elements;
  }

}
