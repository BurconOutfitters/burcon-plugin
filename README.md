# Burcon Outfitters Plugin

The base plugin for the Burcon Outfitters suite of websites.

![WordPress](https://img.shields.io/wordpress/v/akismet.svg?style=flat-square)
![PHP version](https://img.shields.io/php-eye/symfony/symfony.svg?style=flat-square)

## Overview

This is a parent plugin, or a plugin framework, that provides consistent functionality accross all websites under the management of Burcon Outfitters. It was built with extensibility in mind so that each website in the network may add funcionality peculiar to its specific needs.

Each website in the network has its own addon plugin for which this plugin is a dependency.

## Compatibility

* This plugin was written in a WordPress 4.9+ environment with no concern for backwards compatitbility.
* This plugin was written on a local server running PHP 7.0
* The short array syntax ( "[]" rather than "array()" ) requires PHP 5.4+

Sample editor blocks are included in preparation for WordPress 5.0 with it's new user interface. Until that release, the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) is required to use the blocks.

For a nicer user experience, this plugin is recommended for use with [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro/) or the [free version of ACF](https://wordpress.org/plugins/advanced-custom-fields/) plus the [Options Page](https://www.advancedcustomfields.com/add-ons/options-page/) addon. However, most of the ACF features are duplicated, with identical field database names, using the [WordPress Settings API](https://developer.wordpress.org/plugins/settings/settings-api/) to reduce third-party dependencies.

### jQuery Plugins

Included are several frontend UI/UX plugins. They are enqueued via opt-in checkboxes on the Script Options page, except for Fancybox, which is opted in on the Media Settings page.

* Fancybox 3 - [https://github.com/fancyapps/fancybox](https://github.com/fancyapps/fancybox)
  *"Lightbox script for displaying images, videos and more."*
* Slick - [https://github.com/kenwheeler/slick](https://github.com/kenwheeler/slick)
  *"The last carousel you'll ever need."*
* Tabslet - [https://github.com/vdw/Tabslet](https://github.com/vdw/Tabslet)
  *"Yet another jQuery plugin for tabs."*
* Sticky-kit - [https://github.com/leafo/sticky-kit](https://github.com/leafo/sticky-kit)
  *"For creating smart sticky elements."*
* Tooltipster - [https://github.com/iamceege/tooltipster](https://github.com/iamceege/tooltipster)
  *"Flexible, extensible, and modern tooltips."*
* FitVids - [https://github.com/davatron5000/FitVids.js](https://github.com/davatron5000/FitVids.js)

### Credits

All Burcon Outfitters repositories created and maintained by [Controlled Chaos Design](https://github.com/ControlledChaos).