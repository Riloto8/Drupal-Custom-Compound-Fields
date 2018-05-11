<?php

namespace Drupal\testfield\Plugin\Field\FieldType;

use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;


/**
 * Plugin implementation of the 'Test' field type.
 *
 * @FieldType(
 *   id = "Test",
 *   label = @Translation("Test"),
 *   description = @Translation("Custom Compund Field to Test nested structures"),
 *   category = @Translation("Test"),
 *   default_widget = "TestWidget",
 *   default_formatter = "TestFormatter"
 * )
 */


class TestField extends FieldItemBase {



  public static function schema(FieldStorageDefinitionInterface $field_definition) {


   $output = array();


    $output['columns']['check1'] = [
	    'type' => 'int',
      'length' => 1,
      ];
      $output['columns']['check2'] = [
        'type' => 'int',
        'length' => 1,
      ];
        $output['columns']['check3'] = [
          'type' => 'int',
          'length' => 1,
      ];


    
	return $output;

	}

public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {

    $properties = [];


    $properties['check1'] = DataDefinition::create('boolean')
      ->setLabel(t('CheckOne'));

    $properties['check2'] = DataDefinition::create('boolean')
      ->setLabel(t('CheckTwo'));

    $properties['check3'] = DataDefinition::create('boolean')
      ->setLabel(t('CheckThree'));

      return $properties;

   }


  /**
   * Define when the field type is empty.
   *
   * This method is important and used internally by Drupal. Take a moment
   * to define when the field fype must be considered empty.
   */

  public function isEmpty() {


  $has_stuff = FALSE;

    return $has_stuff;
  }

}
