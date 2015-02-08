<?php

/**
 * @file
 * Contains \Drupal\Driver\Fields\Drupal7\LinkFieldHandler
 */

namespace Drupal\Driver\Fields\Drupal7;

/**
 * Class LinkFieldHandler
 * @package Drupal\Driver\Fields\Drupal7
 */
class LinkFieldHandler extends AbstractHandler {

  /**
   * {@inheritDoc}
   */
  public function expand(array $values) {

    $return = array();
    foreach ($values as $value) {
      $return[LANGUAGE_NONE][] = array(
        'title' => $value[0],
        'url' => $value[1],
      );
    }
    return $return;
  }
}
