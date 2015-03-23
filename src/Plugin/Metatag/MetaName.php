<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\MetaTag\MetaName.
 */

/**
 * Each meta tag will extend this base.
 * Set 'base_tag' to TRUE for plugins that are to be extended and not
 * used on their own
 */

namespace Drupal\metatag\Plugin\MetaTag;

use Drupal\Component\Annotation\Plugin;
use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Component\Plugin\PluginBase;
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
class MetaName extends PluginBase implements ConfigurablePluginInterface {
  private $options = array();
//  private $name = '';
//  private $label = '';

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configuration += $this->defaultConfiguration();
  }

  /**
   * Returns this flag type plugin's configuration array.
   *
   * @return array
   *   The plugin configuration array.
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * Replaces the plugin's configurations with those given in the parameter.
   *
   * @param array $configuration
   *   The plugin configuration array.
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration;
  }

  /**
   * Provides a form for this action link plugin settings.
   *
   * The form provided by this method is displayed by the FlagAddForm when
   * creating or editing the Flag. Derived classes should override this.
   *
   * @param array $form
   *   The form array.
   * @param FormStateInterface $form_state
   *   The form state.
   *
   * @return array
   *   The form array
   * @see \Drupal\flag\Form\FlagAddForm
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * Handles the form submit for this action link plugin.
   *
   * Derived classes will want to override this.
   *
   * @param array $form
   *   The form array.
   * @param FormStateInterface $form_state
   *   The form state.
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    // Override this.
  }

  /**
   * Handles the validation for the action link plugin settings form.
   *
   * @param array $form
   *   The form array.
   * @param FormStateInterface $form_state
   *   The form state.
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    // Override this.
  }

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
