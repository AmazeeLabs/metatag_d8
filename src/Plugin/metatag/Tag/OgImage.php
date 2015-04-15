<?php
/**
 * @file
 * Contains Drupal\metatag\Plugin\metatag\Tag\OgImage.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\TagBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * Provides a plugin for the 'og:image' meta tag.
 *
 * @MetatagTag(
 *   id = "og_image",
 *   label = @Translation("Image"),
 *   description = @Translation(""),
 *   name = "og:image",
 *   group = "open_graph",
 *   weight = 2
 * )
 */
class OgImage extends TagBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
