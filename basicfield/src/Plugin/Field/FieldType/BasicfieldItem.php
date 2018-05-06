<?php

namespace Drupal\basicfield\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;



/**
 * Plugin implementation of the 'testfield' field type.
 *
 * @FieldType (
 *   id = "field_testfield",
 *   label = @Translation("Example TestField"),
 *   module = "testfield",
 *   description = @Translation("It's only a custom field test."),
 *   category = @Translation("Custom"),
 *   default_widget = "testfield_widget",
 *   default_formatter = "testfield_formatter"
 * )
 */

 class BasicfieldItem extends FieldItemBase {
 /**
  * {@inheritdoc}
  */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {

return array(
 'columns' => array(
    'valorprueba' => array(
       'type' => 'int',
       'unsigned' => TRUE,
       'not null' => TRUE,
       'default' => 0, 
     )
  )    

);
}



 /**
  * {@inheritdoc}
  */
  public function isEmpty() {
    $value1 = $this->get('valorprueba')->getValue();
    return empty($value1);
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {

    // Add our properties.

    $properties['valorprueba'] = DataDefinition::create('integer')
      ->setLabel(t('ValorPrueba'))
      ->setDescription(t('Valor entero de prueba para el campo testfield'));

    return $properties;
  }
}
