<?php  
/**  
 * @file  
 * Contains Drupal\di_settings\Form\SettingsForm.  
 */  
namespace Drupal\di_settings\Form;  
use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  

class SettingsForm extends ConfigFormBase {  
    /**  
   * {@inheritdoc}  
   */  
  protected function getEditableConfigNames() {  
    return [  
      'di_settings.adminsettings',  
    ];  
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function getFormId() {  
    return 'di_settings_form';
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function buildForm(array $form, FormStateInterface $form_state) {  
    $config = $this->config('di_settings.adminsettings');  

/*
 * https://www.drupal.org/docs/8/api/entity-api/fieldtypes-fieldwidgets-and-fieldformatters
 */
    $form['footer_message'] = [  
      '#type' => 'textarea',  
      '#title' => $this->t('Footer message'),  
      '#description' => $this->t('Message to be included in the footer.'),  
      '#default_value' => $config->get('footer_message'),  
    ];  

    $form['footer_login_link_toggle'] = [  
      '#type' => 'checkbox',  
      '#title' => $this->t('Show login link in footer.'),  
      '#description' => $this->t('Show/Hide the login link in the footer.'),  
      '#default_value' => $config->get('footer_login_link_toggle'),  
    ];  

    return parent::buildForm($form, $form_state);  
  }

  /**  
   * {@inheritdoc}  
   */  
  public function submitForm(array &$form, FormStateInterface $form_state) {  
    parent::submitForm($form, $form_state);  

    $this->config('di_settings.adminsettings')  
      ->set('footer_message', $form_state->getValue('footer_message'))  
      ->save();  
    $this->config('di_settings.adminsettings')  
      ->set('footer_login_link_toggle', $form_state->getValue('footer_login_link_toggle'))  
      ->save();  
  }

}
