=== PHP Mobile Redirect ===

Contributors: Code96 
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=63NWD4R6PNC76
Tags: mobile redirect, mobile detect, mobile detection
Requires at least: 3.2
Tested up to: 3.5.1
Stable tag: 1.4
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily detect mobile devices and redirect them to the mobile version of your site. 

== Description ==
This plugin easily detects mobile devices and redirects them to the mobile version of your site.  This plugin also gives you the ability to bypass the mobile redirect based upon a cookie that is set on your mobile site.  This allows you to redirect mobile users and give the option to "View Full Site." 

**If you are upgrading you must enable the redirect via Settings > PHP Redirect**

To set the cookie simply add the following PHP code to your mobile site:

setcookie("mobile","m", time()+3600, "/");


**The mobile redirect bypass cookie is optional, and should only be used to give your users a "View Full Site" option**

Code 96 offers <a href="http://www.code96wd.com">WordPress Design</a> services and custom <a href="http://www.code96wd.com/premium-wordpress-themes/">WordPress Themes</a>.


== Installation ==
1.  Upload the zip file to the /wp-content/plugins/ directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.
3.  Go to Settings > PHP Redirect.
4.	Enable the mobile redirect by checking the enable checkbox.
5.  Put in the mobile site URL (excluding http://) to the website you would like to redirect mobile traffic to.
6.  Select the name of the cookie you will set on your mobile site to bypass the redirect.
7.  Select "Save Options" and you are done.

== Frequently Asked Questions ==

= Where is the plugins settings page? =

The settings are located in your WordPress Dashboard under Settings > PHP Redirect

= What format should the URL be in the PHP Redirect settings? =

Your should enter your full URL without "http://".  

= What is the cookie name? =

The name of the cookie is set on your mobile site page, and if you are using the sample code the name is "mobile".  This setting is important as the redirect script will evaluate the cookie name in order to bypass the redirect.  If the actual cookie name and the cookie name under the settings menu does not match, the bypass will fail.  

= The script will only bypass the redirect for a short period of time? =

The bypass of the redirect is conditional on the cookie that is set on your mobile site.  If you have used the default code to set the cookie, the cookie will expire in 3600 seconds or one hour.  If you would like to change this time simply modify the cookie settings on your mobile site.  

== Changelog ==
= 1.4 =
* Updated Mobile_Detect class to current version 2.6.1

= 1.3 =
* Admin option added to exclude tablets from the redirect.

= 1.2 =
* Fixed issue with detecting iPad's.  

= 1.1 =
* Added the option to enable/disable the mobile redirect.  

= 1.0 =
* Origninal Release

== Upgrade Notice == 
