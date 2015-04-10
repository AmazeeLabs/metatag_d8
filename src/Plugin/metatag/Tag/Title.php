<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Title.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\TagBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The standard page title.
 *
 * @MetatagTag(
 *   id = "title",
 *   label = @Translation("Page title"),
 *   name = "title",
 *   group = "basic",
 *   weight = 1
 * )
 */
class Title extends TagBase {

  /**
   * Override the output of this tag so it's an actual TITLE tag.
   *
   * @todo Override the existing title tag X-)
   */
  public function output() {
    if (empty($this->value)) {
      // If there is no value, we don't want a metatag output.
      $element = '';
    }
    else {
      $element = array(
        '#theme' => 'html_tag',
        '#tag' => 'title',
        '#value' => $this->value(),
      );
    }

    return $element;
  }
}
