# STLAWU Digital Scholarship Theme

This theme is meant to be used for Digital Scholarship projects and initiatives
for St. Lawrence University. This is a sub-theme of
[Bootstrap](https://www.drupal.org/project/bootstrap).

## Important Note

To get a better idea of what this theme can do, please consider installing the
following modules **using the Standard profile** :

* [STLAWU Digital Scholarship: Date Formats](https://github.com/cainaru/ds_stlawu_date_formats)
* [STLAWU Digital Scholarship: Text Formats](https://github.com/cainaru/ds_stlawu_text_formats)
* [STLAWU Digital Scholarship: Nodes](https://github.com/cainaru/ds_stlawu_nodes)
* [STLAWU Digital Scholarship: Media](https://github.com/cainaru/ds_stlawu_media)
* [STLAWU Digital Scholarship: Paragraphs](https://github.com/cainaru/ds_stlawu_paragraphs)

## Features

### Theme settings

This sub-theme includes the following settings:

* Toggleable university brand banner 
* Toggleable university wordmark in footer
* Toggleable and modifiable contact information in footer
  (Contact information is set to Digital Scholarship by default,
  but can be changed depending on your project's use case)

To access these settings, go to `/admin/appearance/settings/ds_stlawu` and click
the tab labeled Digital Scholarship: stlawu Settings

### Accessible Breadcrumbs

Bootstrap 4 has improved upon [breadcrumb
accessibility](https://getbootstrap.com/docs/4.3/components/breadcrumb/), but
the base theme Bootstrap does not currently support Bootstrap 4. This sub-theme
modifies the markup for the breadcrumbs so that the ordered list is wrapped in a
`<nav>` tag to signify to screenreaders that the list of breadcrumbs is
navigation and also applies `aria-current="page"` to the current page's location
within the breadcrumb navigation hierarchy.

### Better Figure and Figcaptions for inline images and media

As per the markup recommendations in [How do you
figure?](https://www.scottohara.me/blog/2019/01/21/how-do-you-figure.html), this
sub-theme uses `figure="role"` on `figure` elements. Similar is applied to media
types.

### Twig `block`, `extends`, and `parent()`

Many of the templates in this sub-theme take advantage of
[`block`](https://twig.symfony.com/doc/2.x/tags/block.html),
[`extends`](https://twig.symfony.com/doc/2.x/tags/extends.html), and
[`parent()`](https://twig.symfony.com/doc/2.x/functions/parent.html).

### Cleaner `.theme` file

This sub-theme takes advantage of the base theme's [plugin
system](https://drupal-bootstrap.org/api/bootstrap/docs%21plugins%21README.md/group/plugins/8.x-3.x)
for preprocessing variables for templates.
