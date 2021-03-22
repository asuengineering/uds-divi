# UDS Divi

A child theme for [Divi by Elegant Themes](https://www.elegantthemes.com/gallery/divi/) which includes the ASU universal design system (UDS) header and footer.

## Description

This child theme includes the following assets.

- Functions for expressing the UDS Header and Footer that were adapted from [UDS-WordPress](https://github.com/asu-ke-web-services/UDS-WordPress-Theme)
- Font Awesome Pro, latest version delivered by the new "kit" CDN.

## Requirements

The parent theme for ASU Divi is the [Divi Theme from Elegant Themes](http://www.elegantthemes.com/gallery/divi/). If you intend to use the theme to build your own WordPress site, a separate license for the Divi Theme is necessary.

Please also note that this repository contains a child theme and not a stand-alone theme designed for use with [The Divi Builder](http://www.elegantthemes.com/plugins/divi-builder/) plugin also from Elegant Themes.

This child theme is also featured in a distributed WordPress installation within ASU's preferred web host Pantheon. To build a site using Pantheon and UDS Divi please contact the Marketing and Communications team within the Fulton Schools of Engineering.

![Sparky's Trident](https://brandguide.asu.edu/sites/default/files/styles/panopoly_image_original/public/asu_brandhq_images_master_pitchfork_0.png?itok=CdnAzLZW)

## Release Notes

### Version 0.4

- Refactor image sources and `gulpfile.json` to copy assets from `node_modules` correctly. Result is a much smaller theme package.

### Version 0.3

- Addresses a JS loading error due to an incorrectly named file in the enqueue statement.

### Version 0.2

- Enable analytics controls within the customizer to function properly.
- Remove UDS-WordPress 404 error page controls from customizer.
- Fix paths for endorsed logos within the footer.

### Version 0.1

- Initial release of the child theme.
- Working header and footer functionality using native menu builder.
