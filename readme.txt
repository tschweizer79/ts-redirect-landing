=== Plugin Name ===

Plugin Name:  Redirect Landing Page
Donate link:  https://www.paypal.com/donate/?hosted_button_id=67X775VVQ3KCY
Description:  Implements a shortcode 'redirect_landing_page' to redirect a page to 'url_not_logged' or 'url_logged'
Plugin URI:   https://github.com/tschweizer79/redirect-landing-page
Author:       Tomas Schweizer (tschweizer@gmail.com)
Version:      1.0
Contributors: tschweizer
Text Domain:  redirect-landing-page
License:      GPL v3 or later
License URI:  https://www.gnu.org/licenses/gpl-3.0.txt
Tags:         redirect,shortcode

The plugin implements a simple shortocde that allows you to redirect a page to different URLs if the user is logged in or not.

== Description ==

Sometimes you need a user to be redirect to one page if they are not logged in (like a login form), or go to another landing page if the user is logged in. This plugin enables that with a very simple shortcode.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/redirect-landing-page` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Create a new page.
1. Add a shortcode redirect_landing_page with parameters url_logged and url_not_logged like example [redirect_landing_page url_not_logged="login" url_logged="landing_page"]

== Frequently Asked Questions ==

=Now that I set my page, I cannot edit the page anymore because it redirects automatically. What should I do?=

This is an expected behavior. If you need to edit the shortcode for a page, deactivate the plugin and edit. After that, activate it again.

== Changelog ==

= 1.0 =
* First release