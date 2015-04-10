<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\OgTitle.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\TagBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The Open Graph "Title" meta tag.
 *
 * @MetatagTag(
 *   id = "og_title",
 *   label = @Translation("Title"),
 *   name = "og:title",
 *   group = "open_graph",
 *   weight = 1
 * )
 */
class OgTitle extends TagBase {
  // Nothing here yet. Just a placeholder class for a plugin

}
