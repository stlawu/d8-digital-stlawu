<?php

namespace Drupal\ds_stlawu\Plugin\Setting\Components\Footer;

use Drupal\bootstrap\Plugin\Setting\SettingBase;

/**
 * The "footer_wordmark" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "footer_wordmark",
 *   type = "checkbox",
 *   title = @Translation("University wordmark"),
 *   description = @Translation("Show or hide the university wordmark in the footer."),
 *   defaultValue = "1",
 *   weight = -10,
 *   groups = {
 *     "ds_stlawu" = @Translation("Digital Scholarship: stlawu Settings"),
 *     "footer" = @Translation("Footer"),
 *   },
 * )
 */
class FooterWordmark extends SettingBase {}
