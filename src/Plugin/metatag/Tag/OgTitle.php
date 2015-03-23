<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\OgTitle.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaName;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The Open Graph "Title" meta tag.
 *
 * @MetatagTag(
 *   id = "OgTitle",
 *   label = @Translation("OG:Title"),
 *   category = "open_graph"
 * )
 */
class OgTitle extends MetaName {
  // Nothing here yet. Just a placeholder class for a plugin
}
