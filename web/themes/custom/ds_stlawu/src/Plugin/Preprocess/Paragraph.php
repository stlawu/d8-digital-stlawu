<?php

namespace Drupal\ds_stlawu\Plugin\Preprocess;

use Drupal\bootstrap\Plugin\Preprocess\PreprocessBase;
use Drupal\bootstrap\Utility\Variables;

/**
 * Pre-processes variables for the "paragraph" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("paragraph")
 */
class Paragraph extends PreprocessBase {

  /**
   * {@inheritdoc}
   */
  public function preprocessVariables(Variables $variables) {
    $paragraph = $variables['paragraph'];
    $bundle = $paragraph->bundle();

    if ($bundle === 'media') {
      // Setup align variable for template.
      if (!$paragraph->field_media_align->isEmpty()) {
        $align = $paragraph->field_media_align->get(0)->value;
        $variables['align'] = 'align-' . $align;
      }
    }
    if ($bundle === 'aside') {
      // Setup align variable for template.
      if (!$paragraph->field_aside_align->isEmpty()) {
        $align = $paragraph->field_aside_align->get(0)->value;
        $variables['align'] = 'align-' . $align;
      }
      // Setup palette variable for template.
      if (!$paragraph->field_aside_palette_list->isEmpty()) {
        $palettename = $paragraph->field_aside_palette_list->get(0)->value;
        $variables['palette'] = 'bg-' . $palettename;
      }
    }
    if ($bundle === 'section') {
      // Setup palette variable for template.
      if (!$paragraph->field_section_palette_list->isEmpty()) {
        $palettename = $paragraph->field_section_palette_list->get(0)->value;
        $variables['palette'] = 'bg-' . $palettename;
      }
      // Setup width variable for template.
      if (!$paragraph->field_section_width->isEmpty()) {
        switch ($paragraph->field_section_width->get(0)->value) {
          case "1":
            $width = "section-content-width";
            break;

          case "2":
            $width = "section-full-width";
            break;
        }
        $variables['width'] = $width;
      }
    }
  }

}
