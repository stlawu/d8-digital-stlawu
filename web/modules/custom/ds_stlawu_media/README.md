# STLAWU Digital Scholarship: Media

This custom module contains configuration for media types. The goal is for this
to allow reusable configuration for media types across multiple projects.

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
composer config repositories.ds_stlawu_media git
https://github.com/cainaru/ds_stlawu_media
```

Then, run `composer require cainaru/ds_stlawu_media`.

Next, enable the module by running `drush en ds_stlawu_media`.

### Getting configuration for core media types

This module does provide configuration that modifies the entity form displays,
entity view displays, and metadata field mapping for the core media types that
are provided by the Standard profile. To import these config into your site:

* Enable Features UI
* Go to `/admin/config/development/features` 
* Select STLAWU Digital Scholarship from the dropdown list labeled Bundle
* In the row for STLAWU Digital Scholarship: Media, click Changed
* Click the unchecked checkbox that is at the top of the page
* Scroll to the bottom of the page and click the button labeled Import changes
