<?php

namespace Drupal\ds_stlawu\Plugin\Setting\Components\UniversityBrand;

use Drupal\bootstrap\Plugin\Setting\SettingBase;

/**
 * The "university_brand_banner" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "university_brand_banner",
 *   type = "checkbox",
 *   title = @Translation("University brand banner"),
 *   description = @Translation("Show or hide the university brand as a banner above the main navigation."),
 *   defaultValue = "1",
 *   weight = -10,
 *   groups = {
 *     "ds_stlawu" = @Translation("Digital Scholarship: stlawu Settings"),
 *     "university_brand" = @Translation("University brand"),
 *   },
 * )
 */
class UniversityBrandBanner extends SettingBase {}
