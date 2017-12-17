<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;

/**
 * Class SommeForm.
 */
class SommeForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'somme_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {



    $form['sommeb'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Ville en France en Autocomplete'),
      '#description' => $this->t('valeur de b'),
      '#maxlength' => 64,
      '#size' => 64,

        '#ajax' => array(
          'callback' => '::validateEmailAjax',
          'event' => 'keyup',
          'wrapper' => 'box',
          'progress' => array(
            'type' => 'throbber'
          ),

        ),

    ];


        $form['bmi_result'] = array(
      '#prefix' => '<div id="box">',
      '#suffix' => '</div>',
      '#markup' => '',
    );
   


    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }



   function validateEmailAjax(array &$form, FormStateInterface $form_state) {


    $a =  $form_state->getValue('sommea');
    $b =  $form_state->getValue('sommeb');


    $query = \Drupal::database()->select('villes_france_free', 'emp');
    $result = $query->fields('emp', ['ville_nom_reel'])
           ->condition('ville_nom_reel', '%' . db_like($b) . '%', 'LIKE')
          ->distinct()
          ->range(0, 50)
          ->execute();


$output ='' ; 

while ($row = $result->fetchAssoc()) {
  $output .= $row['ville_nom_reel']."<br/>";
}


          $element = $form['bmi_result'];
          $element['#markup'] = $output;
          return $element;
 
}


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.

        drupal_set_message("la somm est ".$somme);


  }

}
