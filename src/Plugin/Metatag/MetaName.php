<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\Metatag\MetaName.
 */

/**
 * Each meta tag will extend this base.
 * Set 'base_tag' to TRUE for plugins that are to be extended and not
 * used on their own
 */

namespace Drupal\metatag\Plugin\Metatag;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Plugin\PluginBase;

/**
 * Base plugin for defining text Metatag tag types.
 *
 * @Metatag(
 *   id = "MetaName",
 *   label = @Translation("Meta tag type: Name"),
 *   category = "basic",
 *   base_tag = TRUE
 * )
 */
class MetaName extends PluginBase {
  private $options = array();
//  private $name = '';
//  private $label = '';

//  public function label() {
//    return $this->label;
//  }
//  public function name() {
//    return $this->name;
//  }

  /**
   * @return bool
   *   Whether this meta tag has been enabled.
   */
  public function isActive() {
    return TRUE;
  }

  /**
   * List all of the default values for different entity types.
   */
  public function defaults() {
    
  }

  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $form = array()) {
    dpm($this);
    // $form[$this->name] = array(
    //   '#type' => 'textfield',
    //   '#title' => $this->label(),
    //   '#default_value' => $this->value();
    // );
    return $form;
  }

  public function submit() {
    
  }

  protected function value() {
    
  }

  public function output() {
    $element = array(
      '#theme' => 'html_tag',
      '#name' => 'name',
      '#content' => $this->value(),
    );
    return render($element);
  }
}
