<?php

namespace Drupal\ds_stlawu\Plugin\Setting\Components\Footer;

use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\bootstrap\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * The "footer_contact_info_name" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "footer_contact_info_name",
 *   type = "textfield",
 *   title = @Translation("Name"),
 *   description = @Translation("Name of department or organization."),
 *   weight = 10,
 *   groups = {
 *     "ds_stlawu" = @Translation("Digital Scholarship: stlawu Settings"),
 *     "footer" = @Translation("Footer"),
 *   },
 * )
 */
class FooterContactInfoName extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function alterFormElement(Element $form, FormStateInterface $form_state, $form_id = NULL) {
    $setting = $this->getSettingElement($form, $form_state);
    $setting->setProperty('states', [
      'visible' => [
        ':input[name="footer_contact_info"]' => ['checked' => TRUE],
      ],
    ]);
  }

}
