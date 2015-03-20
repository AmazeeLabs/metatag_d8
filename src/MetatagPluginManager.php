<?php

/**
 * @file
 * Contains \Drupal\metatag\MetatagPluginManager.
 */

namespace Drupal\metatag;

use Drupal\Core\Plugin\Discovery\AnnotatedClassDiscovery;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * A Plugin to manage your meta tag type.
 */
class MetatagPluginManager extends DefaultPluginManager {

  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    $subdir = 'Plugin/Metatag';

    // The name of the annotation class that contains the plugin definition.
    $plugin_definition_annotation_name = 'Drupal\metatag\Annotation\Metatag';

    parent::__construct($subdir, $namespaces, $module_handler, $plugin_definition_annotation_name);

    $this->alterInfo('metatag_info');

//    $this->setCacheBackend($cache_backend, 'metatag_info');
  }

  /**
   * Gets the names of all categories.
   *
   * @return string[]
   *   An array of translated categories, sorted alphabetically.
   */
  public function getCategories() {
    // TODO: Implement getCategories() method.
  }

  /**
   * Gets sorted plugin definitions.
   *
   * @param array[]|null $definitions
   *   (optional) The plugin definitions to sort. If omitted, all plugin
   *   definitions are used.
   *
   * @return array[]
   *   An array of plugin definitions, sorted by category and label.
   */
  public function getSortedDefinitions(array $definitions = NULL) {
    // TODO: Implement getSortedDefinitions() method.
  }

  /**
   * Gets sorted plugin definitions grouped by category.
   *
   * In addition to grouping, both categories and its entries are sorted,
   * whereas plugin definitions are sorted by label.
   *
   * @param array[]|null $definitions
   *   (optional) The plugin definitions to group. If omitted, all plugin
   *   definitions are used.
   *
   * @return array[]
   *   Keys are category names, and values are arrays of which the keys are
   *   plugin IDs and the values are plugin definitions.
   */
  public function getGroupedDefinitions(array $definitions = NULL) {
    // TODO: Implement getGroupedDefinitions() method.
  }

  /**
   * Indicates if a specific plugin definition exists.
   *
   * @param string $plugin_id
   *   A plugin ID.
   *
   * @return bool
   *   TRUE if the definition exists, FALSE otherwise.
   */
  public function hasDefinition($plugin_id) {
    // TODO: Implement hasDefinition() method.
  }

  /**
   * Executes an executable plugin.
   *
   * @param \Drupal\Core\Executable\ExecutableInterface $plugin
   *   An executable plugin instance managed by the implementing manager.
   *
   * @throws \Drupal\Core\Executable\ExecutableException
   *   If the plugin could not be executed.
   *
   * @return mixed
   *   The returned data varies by plugin implementation, e.g. conditions return
   *   the boolean evaluation result.
   */
  public function execute(ExecutableInterface $plugin) {
    // TODO: Implement execute() method.
  }
}
