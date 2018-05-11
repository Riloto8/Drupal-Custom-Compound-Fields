<?php

namespace Drupal\testfield\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\WidgetInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'TestWidget' widget.
 *
 * @FieldWidget(
 *   id = "TestWidget",
 *   label = @Translation("Creating Custom Fields Test"),
 *   field_types = {
 *     "Test"
 *   }
 * )
 */


class TestWidget extends WidgetBase implements WidgetInterface {

  /**
   * Define the element for the field type.
   *
   * Inside this method we can define the element used to edit the field type.
   *
   * Here there is a list of allowed element types: https://goo.gl/XVd4tA
   */


public function formElement( FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $formState) {


       $item =& $items[$delta];

      $element['label1'] = array(
      '#type' => 'markup',
      '#markup' => '1. Testing Fiedlsets :',
      );

            $element['check1'] = array(
            '#title' => 'DX',
            '#type' => 'checkbox',
	      '#default_value' =>  isset($item->check1) ? $item->check1 : '',
            );

            $element['check2'] = array(
            '#title' => 'VX',
            '#type' => 'checkbox',
            '#default_value' =>  isset($item->check2) ? $item->check2 : '',
            );

       $element['label2'] = array(
       '#type' => 'markup',
       '#markup' => '2. Checkbox: ',
       );

            $element['check3'] = array(
            '#title' => 'DX',
            '#type' => 'checkbox',
            '#default_value' =>  isset($item->check3) ? $item->check3 : '',
            );

            
   return $element;

     }
}
