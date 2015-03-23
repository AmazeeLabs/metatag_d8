<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Title.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaName;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The standard page title.
 *
 * @MetatagTag(
 *   id = "Title",
 *   label = @Translation("Page title")
 * )
 */
class Title extends MetaName {
  function output() {
    // drupal_set_title($this->value);
  }
}
