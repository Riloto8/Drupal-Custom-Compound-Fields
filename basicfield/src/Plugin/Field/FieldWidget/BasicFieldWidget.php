<?php

namespace Drupal\basicfield\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'testfield_widget' widget.
 *
 * @FieldWidget (
 *   id = "testfield_widget",
 *   label = @Translation("TestField widget"),
 *   field_types = {
 *     "field_testfield"
 *   }
 * )
 */

 class BasicFieldWidget extends WidgetBase {
  /**
   * {@inheritdoc}
   */
  public function formElement(
    FieldItemListInterface $items,
    $delta,
    array $element,
    array &$form,
    FormStateInterface $form_state
  ) {
    $element['valorprueba'] = array(
      '#type' => 'number',
      '#title' => t('Valor de prueba del campo'),
      '#default_value' => isset($items[$delta]->valorprueba) ? $items[$delta]->valorprueba : 1,
      '#size' => 3,
    );

    // If cardinality is 1, ensure a label is output for the field by wrapping
    // it in a details element.
    if ($this->fieldDefinition->getFieldStorageDefinition()->getCardinality() == 1) {
      $element += array(
        '#type' => 'fieldset',
        '#attributes' => array('class' => array('container-inline')),
      );
    }

    return $element;
  }
}

