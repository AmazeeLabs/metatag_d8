<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\Metatag\OgTitle.
 */

namespace Drupal\metatag\Plugin\Metatag;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\metatag\Plugin\Metatag\MetaName;

/**
 * Base plugin for defining text Metatag tag types.
 *
 * @Metatag(
 *   id = "OgTitle",
 *   label = @Translation("OG:Title"),
 *   category = "open_graph"
 * )
 */
class OgTitle extends MetaName {
  // Nothing here yet. Just a placeholder class for a plugin
}
