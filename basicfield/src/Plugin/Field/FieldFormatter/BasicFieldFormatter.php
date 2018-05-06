<?php

namespace Drupal\basicfield\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'testfield_formatter' formatter.
 *
 * @FieldFormatter (
 *   id = "testfield_formatter",
 *   label = @Translation("TestField"),
 *   field_types = {
 *     "field_testfield"
 *   }
 * )
 */
class BasicFieldFormatter extends FormatterBase {
  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode = NULL) {
    $elements = array();

    foreach ($items as $delta => $item) {

      $markup .= "The charded value is: " . $item-> valorprueba;

      $elements[$delta] = array(
        '#type' => 'markup',
        '#markup' => $markup,
      );
    }

    return $elements;
  }
}

