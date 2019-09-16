# STLAWU Digital Scholarship: Nodes

This custom module contains configuration for content types. The goal is for
this to allow reusable configuration for content types across multiple projects.

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
composer config repositories.ds_stlawu_nodes git
https://github.com/cainaru/ds_stlawu_nodes
```

Then, run `composer require cainaru/ds_stlawu_nodes`.

Next, enable the module by running `drush en ds_stlawu_nodes`.

To enable content types included in this module (e.g., article and narrative),
run `drush en ds_stlawu_article` or `drush en ds_stlawu_narrative`.

### Getting configuration for core content types

This module does provide configuration that modifies the entity form displays
and entity view displays for some content types provided by the Standard
profile. To import these config into your site:

* Enable Features UI
* Go to `/admin/config/development/features` 
* Select STLAWU Digital Scholarship from the dropdown list labeled Bundle
* In the row for STLAWU Digital Scholarship: Nodes, click Changed
* Click the unchecked checkbox that is at the top of the page
* Scroll to the bottom of the page and click the button labeled Import changes
