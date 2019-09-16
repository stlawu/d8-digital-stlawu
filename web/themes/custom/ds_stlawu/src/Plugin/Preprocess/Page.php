<?php

namespace Drupal\ds_stlawu\Plugin\Preprocess;

use Drupal\bootstrap\Plugin\Preprocess\Page as BaseThemePage;
use Drupal\bootstrap\Utility\Variables;
use Drupal\node\Entity\Node;

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("page")
 */
class Page extends BaseThemePage {

  /**
   * {@inheritdoc}
   */
  public function preprocessVariables(Variables $variables) {
    // Get the current node.
    $node = \Drupal::routeMatch()->getParameter('node');

    // Load nodes that aren't objects? Somehow this helps...?
    if(!is_object($node) && is_int((int) $node)) {
      $node = Node::load($node);
    }

    // Define which content types or pages (e.g., views that are displayed as
    // pages?) will be edge-to-edge
    $edgetoedge = ['landing_page', 'narrative'];
    
    // Check if it's a node object first then check that it can be assigned to
    // $node.
    if (is_object($node)) {
      // Get the content type.
      $type = $node->getType();
      // If the content type is defined to be edge-to-edge.
      if (in_array($type, $edgetoedge)) {
        $variables['layout_type'] = 'layout-edge-to-edge';
      }
      // If the content type is NOT edge-to-edge.
      else {
        $variables['layout_type'] = 'layout-constrained';
      }
    }
    // If the page is NOT edge-to-edge (and also NOT a content type).
    else {
      $variables['layout_type'] = 'layout-constrained';
    }
    parent::preprocessVariables($variables);
  }

}
