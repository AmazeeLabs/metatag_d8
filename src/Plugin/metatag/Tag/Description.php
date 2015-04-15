<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Description.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\TagBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The basic "Description" meta tag.
 *
 * @MetatagTag(
 *   id = "description",
 *   label = @Translation("Description"),
 *   description = @Translation(""),
 *   name = "description",
 *   group = "basic",
 *   weight = 2
 * )
 */
class Description extends TagBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
