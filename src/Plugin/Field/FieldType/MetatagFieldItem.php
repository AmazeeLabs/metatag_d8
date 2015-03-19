<?php

/**
 * @file
 * Contains \Drupal\metatag\Plugin\Field\FieldType\MetatagFieldItem.
 */

namespace Drupal\metatag\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'metatag' field type.
 *
 * @FieldType(
 *   id = "metatag",
 *   label = @Translation("Meta tags"),
 *   description = @Translation("This field stores code meta tags."),
 *   default_widget = "metatag_firehose",
 *   default_formatter = "metatag_formatter"
 * )
 */
class MetatagFieldItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings() {
    return array(
      'max_length' => 255,
    ) + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('Metatag'))
      ->setRequired(TRUE);

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

  /**
   * {@inheritdoc}
   */
  // public function getConstraints() {
  //   $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();
  //   $constraints = parent::getConstraints();
  //
  //   if ($max_length = $this->getSetting('max_length')) {
  //     $constraints[] = $constraint_manager->create('ComplexData', array(
  //       'value' => array(
  //         'Length' => array(
  //           'max' => $max_length,
  //           'maxMessage' => t('%name: the text may not be longer than @max characters.', array('%name' => $this->getFieldDefinition()->getLabel(), '@max' => $max_length)),
  //         )
  //       ),
  //     ));
  //   }
  //
  //   return $constraints;
  // }

  /**
   * {@inheritdoc}
   */
  // public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
  //   $element = array();
  //
  //   $element['max_length'] = array(
  //     '#type' => 'number',
  //     '#title' => t('Maximum length'),
  //     '#default_value' => $this->getSetting('max_length'),
  //     '#required' => TRUE,
  //     '#description' => t('The maximum length of the field in characters.'),
  //     '#min' => 1,
  //     '#disabled' => $has_data,
  //   );
  //   $element += parent::storageSettingsForm($form, $form_state, $has_data);
  //
  //   return $element;
  // }

  /**
   * {@inheritdoc}
   */
  // public function applyDefaultValue($notify = TRUE) {
  //   // Default to a simple \Drupal\Component\Utility\String::checkPlain().
  //   // @todo: Add in the filter default format here.
  //   $this->setValue(array('format' => NULL), $notify);
  //   return $this;
  // }

  /**
   * {@inheritdoc}
   */
  // public function onChange($property_name, $notify = TRUE) {
  //   // Unset processed properties that are affected by the change.
  //   foreach ($this->definition->getPropertyDefinitions() as $property => $definition) {
  //     if ($definition->getClass() == '\Drupal\metatag\TextProcessed') {
  //       if ($property_name == 'format' || ($definition->getSetting('text source') == $property_name)) {
  //         $this->writePropertyValue($property, NULL);
  //       }
  //     }
  //   }
  //   parent::onChange($property_name, $notify);
  // }

  /**
   * {@inheritdoc}
   */
  // public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
  //   $random = new Random();
  //   $settings = $field_definition->getSettings();
  //
  //   if (empty($settings['max_length'])) {
  //     // Textarea handling
  //     $value = $random->paragraphs();
  //   }
  //   else {
  //     // Textfield handling.
  //     $value = substr($random->sentences(mt_rand(1, $settings['max_length'] / 3), FALSE), 0, $settings['max_length']);
  //   }
  //
  //   $values = array(
  //     'value' => $value,
  //     'summary' => $value,
  //     'format' => filter_fallback_format(),
  //   );
  //   return $values;
  // }

}
