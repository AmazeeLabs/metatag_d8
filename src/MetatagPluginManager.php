<?php

/**
 * @file
 * Contains the \Drupal\metatag\MetatagPluginManager class.
 */

namespace Drupal\metatag;

use Drupal\Component\Plugin\Factory\DefaultFactory;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Language\LanguageManager;
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

    $this->setCacheBackend($cache_backend, 'metatag_info');
  }

}
