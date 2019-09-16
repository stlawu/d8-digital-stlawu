# STLAWU Digital Scholarship: Date Formats

This custom module contains configuration date formats. Some of these formats
are used in twig templates for the ds_stlawu theme.

## Prerequisites

In your Drupal project's `composer.json`, check your `installer-paths`  to  make
sure `drupal-custom-module` is mapped to your project's custom module 
directory, such as shown by the example below:

```
"extra": {
  "installer-types": [
    "bower-asset",
    "npm-asset",
    "library",
    "component"
  ],
  "installer-paths": {
    "web/core": ["type:drupal-core"],
    "web/libraries/{$name}": [
      "type:drupal-library", 
      "type:bower-asset", 
      "type:npm-asset"
    ],
    "web/modules/contrib/{$name}": ["type:drupal-module"],
    "web/modules/custom/{$name}": ["type:drupal-custom-module"],
    "web/profiles/contrib/{$name}": ["type:drupal-profile"],
    "web/profiles/custom/{$name}": ["type:drupal-custom-profile"],
    "web/themes/contrib/{$name}": ["type:drupal-theme"],
    "web/themes/custom/{$name}": ["type:drupal-custom-theme"],
    "drush/contrib/{$name}": ["type:drupal-drush"]
},

```

## Installation

In Terminal, run the following command at the root of your Drupal project:

```
composer config repositories.ds_stlawu_date_formats git
https://github.com/cainaru/ds_stlawu_date_formats
```

Then, run `composer require cainaru/ds_stlawu_date_formats`.

Next, enable the module by running `drush en ds_stlawu_date_formats`.
