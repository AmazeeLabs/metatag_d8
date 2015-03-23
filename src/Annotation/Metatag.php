<?php
/**
 * @file
 * Contains the \Drupal\metatag\Annotation\Metatag annotation plugin.
 */

namespace Drupal\metatag\Annotation;

use Drupal\Component\Annotation\Plugin;


/**
 * Defines a Metatag annotation object.
 *
 * @Annotation
 */
class Metatag extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The title of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * The category this meta tag fits in.
   *
   * @var string
   */
  public $category;

  /**
   * Whether or not this is a base tag class.
   *
   * @var boolean
   */
  public $base_tag;
  
}
