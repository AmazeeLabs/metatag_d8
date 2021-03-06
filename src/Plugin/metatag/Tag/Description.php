<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Description.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;
use Drupal\metatag\Annotation\MetatagTag;

/**
 * The basic "Description" meta tag.
 *
 * @MetatagTag(
 *   id = "description",
 *   label = @Translation("Description"),
 *   description = @Translation("A brief and concise summary of the page's content, preferably 150 characters or less. The description meta tag may be used by search engines to display a snippet about the page in search results."),
 *   name = "description",
 *   group = "basic",
 *   weight = 2
 * )
 */
class Description extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
