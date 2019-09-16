<?php

namespace Drupal\ds_stlawu\Plugin\Setting\Components\Footer;

use Drupal\bootstrap\Plugin\Setting\SettingBase;

/**
 * The "footer_contact_info" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "footer_contact_info",
 *   type = "checkbox",
 *   title = @Translation("Contact information"),
 *   description = @Translation("Show or hide contact information in the footer."),
 *   defaultValue = "1",
 *   weight = 1,
 *   groups = {
 *     "ds_stlawu" = @Translation("Digital Scholarship: stlawu Settings"),
 *     "footer" = @Translation("Footer"),
 *   },
 * )
 */
class FooterContactInfo extends SettingBase {}
