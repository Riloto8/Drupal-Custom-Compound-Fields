<?php

namespace Drupal\customcompoundfield\Plugin\Field\FieldWidget;

use Drupal;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'ObjetivoWidget' widget.
 *
 * @FieldWidget(
 *   id = "ObjetivoWidget",
 *   label = @Translation("Cargar Objetivo"),
 *   field_types = {
 *     "Objetivo"
 *   }
 * )
 */
class ObjetivoWidget extends WidgetBase {
	
  /**
   * Define the form for the field type.
   * 
   * Inside this method we can define the form used to edit the field type.
   * 
   * Here there is a list of allowed element types: https://goo.gl/XVd4tA
   */
	
 
public function formElement(
    FieldItemListInterface $items,
    $delta, 
    Array $element, 
    Array &$form, 
    FormStateInterface $formState
  ) {
    // Objetivo
    $element['objetivo'] = [
      '#type' => 'select',
      '#title' => t('Objetivo'),
      // Set here the current value for this field, or a default value (or 
      // null) if there is no a value
      '#default_value' => isset($items[$delta]->objetivo) ? 
          $items[$delta]->objetivo : 1,
      '#placeholder' => t('Objetivo'),
    ];

    // Resultado
    $element['resultado'] = [
      '#type' => 'textfield',
      '#title' => t('Resultado'),
      '#default_value' => isset($items[$delta]->resultado) ? 
          $items[$delta]->resultado : "Introduzca aqui un resultado observado",
      '#placeholder' => t('Resultado'),
    ];

   // Indicador
    $element['indicador'] = [
      '#type' => 'textfield',
      '#title' => t('Indicador'),
      '#default_value' => isset($items[$delta]->indicador) ?
          $items[$delta]->indicador : "Introduzca aqui un indicador observado",
      '#placeholder' => t('Indicador'),
    ];


    // Organiza visualmente todas las instancias del campo mediante
    // alineación horizontal de los elementos del nuevo campo.
     $element += array(
        '#type' => 'fieldset',
        '#attributes' => array('class' => array('container-inline')),
      );


    return $element;
  }
}
