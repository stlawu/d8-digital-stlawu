<?php

namespace Drupal\ds_stlawu\Plugin\Setting\Components\Footer;

use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\bootstrap\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * The "footer_contact_info_email" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "footer_contact_info_email",
 *   type = "email",
 *   title = @Translation("Email"),
 *   weight = 12,
 *   groups = {
 *     "ds_stlawu" = @Translation("Digital Scholarship: stlawu Settings"),
 *     "footer" = @Translation("Footer"),
 *   },
 * )
 */
class FooterContactInfoEmail extends SettingBase {

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
