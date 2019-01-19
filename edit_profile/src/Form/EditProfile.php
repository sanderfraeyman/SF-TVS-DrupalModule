<?php

/**
 * @file
 * Contains \Drupal\src\Form\EditProfile
 */

 namespace Drupal\src\Form;

 use Drupal\Core\Form\ConfigFormBase;
 use Drupal\Core\FormStateInterface;

 class EditProfileForm extends ConfigFormBase{
 /**
  * Generereert een pagina
  */
  public function getFormId(){
      return 'edit_profile';
  }

/**
 * @{inheritdoc}
 */

  public function buildForm(array $form, FormStateInterface $form_state){
      /**
       * 21.45 min YT
       */
      //create constructor
      $form = parent::buildForm($form, $form_state);
        //default settins
        $config = $this=>config('edit_profile.settings');

      $form['edit_profile_firstname'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Firstname'),
        '#description' => $this->t('Enter your first name'),
        /**'#default_value' => $config->get('edit_profile_firstname'),*/
        '#size' => 10,
      );

      $form['edit_profile_lastname'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Last Name'),
        '#description' => $this->t('Enter your last name'),
        /**'#default_value' => $config->get('edit_profile_lastname'),*/
        '#size' => 10,
      );

      return $form;

  }

  public function submitForm(array $form, FormStateInterface $form_state){
    //get the object
    /**
    * $label = $form_state->getValue('edit_profile_firstname');
    * $label = $form_state->getValue('edit_profile_lastname');
    */
    // Set the values the user submitted in the form.
    $config = $this->config('edit_profile.settings');
    $config->set('edit_profile_firstname', $label)
    ->set('edit_profile_lastname', $label)
    ->save();
  
    return parent::submitForm($form, $form_state);
    }

  protected function getEditableConfigNames(){
    return [
      'edit_profile.settings',
    ]
  }


 }