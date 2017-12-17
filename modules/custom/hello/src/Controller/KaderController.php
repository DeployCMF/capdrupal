<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class KaderController.
 */
class KaderController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('salut monsieur :'.$name ),
    ];
  }
public function somme($a,$b) {


      $somme = O ; 

      for ($i=$a; $i<=$b; $i++) { 
        # code...
        $somme+=$i;
      }


    return [
      '#type' => 'markup',
      '#markup' => 'la somme de'.$a.'  à  '.$b.' est :'.$somme 
    ];
  }
}
