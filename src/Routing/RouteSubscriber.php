<?php
/**
 * @file
 * Contains \Drupal\metatag\Routing\RouteSubscriber.
 */

namespace Drupal\metatag\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Always deny access to '/user/logout'.
    // Note that the second parameter of setRequirement() is a string.
    foreach ($collection->all() as $route_name => $route) {
      if ($entity_type = metatag_is_supported_route($route_name)) {
        $route = $collection->get($route_name);
        $route->setDefault('_title_callback', '\Drupal\metatag\Controller\MetatagController::set_title');
        // print_r($route);
        // $route->setRequirement('_access', 'FALSE');
      }
    }
  }
}
