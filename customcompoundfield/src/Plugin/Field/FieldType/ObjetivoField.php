<?php

namespace Drupal\customcompoundfield\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Field\FieldStorageDefinitionInterface as StorageDefinition;

/**
 * Plugin implementation of the 'Objetivo' field type.
 *
 * @FieldType(
 *   id = "Objetivo",
 *   label = @Translation("Objetivo"),
 *   description = @Translation("Registra y almacena un objetivo."),
 *   category = @Translation("Custom"),
 *   default_widget = "ObjetivoWidget",
 *   default_formatter = "ObjetivoFormatter"
 * )
 */

class ObjetivoField extends FieldItemBase {
  /**
   * Field type properties definition.
   * 
   * Inside this method we defines all the fields (properties) that our 
   * custom field type will have.
   * 
   * Here there is a list of allowed property types: https://goo.gl/sIBBgO
   */

  public static function propertyDefinitions(StorageDefinition $storage) {
    $properties = [];
    $properties['objetivo'] = DataDefinition::create('integer')
      ->setLabel(t('Objetivo'));
    $properties['resultado'] = DataDefinition::create('string')
      ->setLabel(t('Resultado'));
     $properties['indicador'] = DataDefinition::create('string')
      ->setLabel(t('Indicador'));

    return $properties;
  }
  /**
   * Field type schema definition.
   * 
   * Inside this method we defines the database schema used to store data for 
   * our field type.
   * 
   * Here there is a list of allowed column types: https://goo.gl/YY3G7s
   */
  public static function schema(StorageDefinition $storage) {
	  $columns = [];

    $columns['objetivo'] = [  
	    'type' => 'int',
	    'size' => 'small',
      ];

    $columns['resultado'] = [
      'type' => 'char',
      'length' => 255 ,
    ];
    $columns['indicador'] = [
      'type' => 'char',
      'length' => 255,
    ];
    return [
      'columns' => $columns,
      'indexes' => [],
    ];
  }


  /**
   * Define when the field type is empty. 
   * 
   * This method is important and used internally by Drupal. Take a moment
   * to define when the field fype must be considered empty.
   */
  public function isEmpty() {
    $isEmpty = 
      empty($this->get('objetivo')->getValue()) &&
      empty($this->get('resultado')->getValue()) &&
      empty ($this->get('indicador')->getValue();
    return $isEmpty;
  }
}
