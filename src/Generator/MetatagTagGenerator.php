<?php
/**
 * @file
 * Contains \Drupal\metatag\Generator\MetatagTagGenerator.
 */

namespace Drupal\metatag\Generator;

use Drupal\AppConsole\Generator\Generator;

class MetatagTagGenerator extends Generator {
  /**
   * Generator Plugin Block
   * @param  $module
   * @param  $class_name
   * @param  $label
   * @param  $plugin_id
   * @param  $services
   */
  public function generate($module, $name, $label, $plugin_id, $group, $weight) {
    $parameters = [
      'module' => $module,
      'name' => $name,
      'label' => $label,
      'plugin_id' => $plugin_id,
      'group' => $group,
      'weight' => $weight,
    ];

    $this->renderFile(
      // $this->getModulePath('metatag') . '/templates/tag.php.twig',
      'tag.php.twig',
      $this->getPluginPath($module, 'metatag/Tag') . '/' . $class_name . '.php',
      $parameters
    );
  }
}
