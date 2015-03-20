<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\Field\FieldWidget\MetatagFirehose.
 */

namespace Drupal\metatag\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Custom widget for choosing an option from a map.
 *
 * @FieldWidget(
 *   id = "metatag_firehose",
 *   label = @Translation("Advanced meta tags form"),
 *   field_types = {
 *     "metatag"
 *   }
 * )
 */
class MetatagFirehose extends WidgetBase {
  /**
   * Field API widget form.
   *
   * @param FieldItemListInterface $items
   * @param int $delta
   * @param array $element
   * @param array $form
   * @param FormStateInterface $form_state
   *
   * @return array
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $metatag_service = \Drupal::service('plugin.manager.metatag');
    $metatag_types = $metatag_service->getDefinitions();
    dpm($metatag_types);
    // $raw = isset($items[$delta]->value) ? $items[$delta]->value : '';
    // $values = unserialize($raw);

    // foreach ($metatag_types as $tag_name => $tag_info) {
    //   dpm($tag_info);
    //   dpm((string)$tag_info['label']);
    //   if (empty($tag_info['base_tag'])) {
    //     $tag = $metatag_service->createInstance($tag_name);
    //     $element['value'] = $element + $tag->form();
    //   }
    // }

    return $element;
  }
}
