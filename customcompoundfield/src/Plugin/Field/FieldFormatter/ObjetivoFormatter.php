<?php

namespace Drupal\customcompoundfield\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

/**
 * Plugin implementation of the 'ObjetivoFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "ObjetivoFormatter",
 *   label = @Translation("Objetivo"),
 *   field_types = {
 *     "Objetivo"
 *   }
 * )
 */

class ObjetivoFormatter extends FormatterBase {
      
  /**
   * Define how the field type is showed.
   * 
   * Inside this method we can customize how the field is displayed inside 
   * pages.
   */
	
 
 public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'markup',
        '#markup' => $item->objetivo . ', ' . $item->resultado . ',' . $item->indicador
      ];
    }
    return $elements;
  }
  
} 

