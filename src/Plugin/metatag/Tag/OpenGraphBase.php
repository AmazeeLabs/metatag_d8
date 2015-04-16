<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\OpenGraphBase.
 */

/**
 * This base plugin allows OG meta tags to be further customized.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Form\FormStateInterface;

abstract class OpenGraphBase extends TagBase {
  /**
   * Display the meta tag.
   */
  public function output() {
    if (empty($this->value)) {
      // If there is no value, we don't want a metatag output.
      $element = '';
    }
    else {
      $element = array(
        '#tag' => 'meta',
        '#attributes' => array(
          'property' => $this->name,
          'content' => $this->value(),
        )
      );
    }

    return $element;
  }
}
