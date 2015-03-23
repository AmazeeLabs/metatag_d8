<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\Metatag\Title.
 */

namespace Drupal\breakfast\Plugin\Metatag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\Metatag\MetaName;
use Drupal\metatag\Annotation\Metatag;

/**
 * Base plugin for defining text Metatag tag types.
 *
 * @Metatag(
 *   id = "Title",
 *   label = @Translation("Page title")
 * )
 */
class Title extends MetaName {
  protected $name = 'title';
  protected $label = 'Page title';

  function output() {
    // drupal_set_title($this->value);
  }
}
