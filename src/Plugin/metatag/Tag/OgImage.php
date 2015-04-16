<?php
/**
 * @file
 * Contains Drupal\metatag\Plugin\metatag\Tag\OgImage.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\OpenGraphBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * Provides a plugin for the 'og:image' meta tag.
 *
 * @MetatagTag(
 *   id = "og_image",
 *   label = @Translation("Image"),
 *   description = @Translation("The URL of an image which should represent the content. For best results use an image that is at least 1200 x 630 pixels in size, but at least 600 x 316 pixels is a recommended minimum. Supports PNG, JPEG and GIF formats. Should not be used if og:image:url is used."),
 *   name = "og:image",
 *   group = "open_graph",
 *   weight = 2
 * )
 */
class OgImage extends OpenGraphBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
