<?php
/**
 * @file
 * Contains \Drupal\edit_profile\Controller\ProfileController.
 */

namespace Drupal\edit_profile\Controller;

#Deze controller hoort de informatie van de user op te halen en de form te kopieren die al in drupal zit onder de admin pagina's
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for edit_profile routes.
 */
class ProfileController extends ControllerBase{

  /**
   * Returns an administrative overview of user profile.
   *
   * @return array
   *   A render array representing the administrative page content.
   */
  public function profileOverview() {
    // ...
  }
}