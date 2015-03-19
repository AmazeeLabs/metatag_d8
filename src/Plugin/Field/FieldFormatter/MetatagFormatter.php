<?php

/**
 * @file
 * Contains Drupal\metatag\Plugin\Field\FieldFormatter\MetatagFormatter.
 */

namespace Drupal\metatag\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'metatag_simple_text' formatter.
 *
 * @FieldFormatter(
 *   id = "metatag_formatter",
 *   module = "metatag",
 *   label = @Translation("Meta tags"),
 *   field_types = {
 *     "metatag"
 *   }
 * )
 */
class MetatagFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = array();

    foreach ($items as $delta => $item) {
      $elements[$delta] = array(
        // We create a render array to produce the desired markup,
        // "<p style="color: #hexcolor">The color code ... #hexcolor</p>".
        // See theme_html_tag().
        '#type' => 'html_tag',
        '#tag' => 'p',
        '#attributes' => array(
          'style' => 'color: ' . $item->value,
        ),
        '#value' => t('The color code in this field is @code', array('@code' => $item->value)),
      );
    }

    return $elements;
  }

}
