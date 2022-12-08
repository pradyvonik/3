<?php

namespace Drupal\embassies_main_general\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Entity\EntityInterface;
use Drupal\node\Controller\NodeViewController;

/**
 * Custom node redirect controller.
 */
class NodeRedirectController extends NodeViewController {

  /**
   *
   */
  public function view(EntityInterface $node, $view_mode = 'default', $langcode = NULL) {
    // Redirect to the edit path on the discussion type.
    if ($node->bundle() === 'about_the_embassy') {
      return new RedirectResponse('/the-embassy/about');
    }
    // Otherwise, fall back to the parent route controller.
    return parent::view($node, $view_mode, $langcode);
  }

}
