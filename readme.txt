=== WP-ImageRotate ===

* Contributors: alfreddatakillen
* Tags: wordpress, image, rotation, imagerotate
* Requires at least: 2.0.2
* Tested up to: 3.3.1
* Stable tag: 1.1
* License: GPLv2

Makes image rotation work when imagerotate() is missing from your GD.

== Description ==

Due to memory leaks, Debian removed imagerotate() from php5-gd. If rotating does not work in your Wordpress image editor, this plugin will supply an alternative imagerotate() function.

Other plugins also solve this issue, but we got timeouts when working with (very) large images, so this plugin does the same thing - but faster!

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `imagerotate.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where do I report bugs? = 

Report any issues at the github issue tracker:
https://github.com/alfreddatakillen/wp-imagerotate/issues

= Where do I contribute with code, bug fixes, etc.? =

At github:
https://github.com/alfreddatakillen/wp-imagerotate

= What about the license? =

Read more about GPLv2 here:
http://www.gnu.org/licenses/gpl-2.0.html

= Do you like beer? =

If we meet some day, and you think this stuff is worth it, you may buy me a beer in return. (GPLv2 still applies.)

== Changelog ==

= 1.1 =

* Added a check if imagerotate() already exists, so the plugin does not break anything on servers with full GD support.

= 1.0 =

* First public release.

== Upgrade Notice ==

`<?php code(); // goes in backticks ?>`
