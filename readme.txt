=== PHP Mobile Redirect ===

Contributors: Code96 
Donate link:https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=63NWD4
Tags: mobile redirect, mobile detect, mobile detection
Requires at least: 3.2
Tested up to: 3.5.1
Stable tag: /trunk/
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily detect mobile devices and redirect them to the mobile version of your site. 

== Description ==
This plugin easily detects mobile devices and redirects them to the mobile version of your site.  This plugin also gives you the ability to bypass the mobile redirect based upon a cookie that is set on your mobile site.  This allows you to redirect mobile users and give the option to "View Full Site." 

To set the cookie simply add the following code to your mobile site:

<?php
setcookie("mobile","m", time()+3600, "/");
?>

**The mobile redirect bypass cookie is optional, and should only be used to give your users a "View Full Site" option**


== Installation ==
1.  Upload the zip file to the /wp-content/plugins/ directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.
3.  Go to Settings > PHP Redirect.
4.  Put in the mobile site URL (excluding http://) to the website you would like to redirect mobile traffic to.
6.  Select the name of the cookie you will set on your mobile site to bypass the redirect.
7.  Select "Save Options" and you are done.

== Frequently Asked Questions ==

= Where is the plugins settings page? =

The settings are located in your WordPress Dashboard under Settings > PHP Redirect

= What format should the URL be in teh PHP Redirect settings? =

Your URL should be entered as follows, www.mymobilesite.com and should not indlude http://.  

= What is the cookie name? =

The name of the cookie is set on your mobile site page, and if you are using the sample code the name is "mobile".  This setting is important as the redirect script will evaluate the cookie name in order to bypass the redirect.  If the actual cookie name and the cookie name under the settings menu does not match, the bypass will fail.  

= The script will only bypass the redirect for a short period of time? =

The bypass of the redirect is conditional on the cookie that is set on your mobile site.  If you have used the default code to set the cookie, the cookie will expire in 3600 seconds or one hour.  If you would like to change this time simply modify the cookie settings on your mobile site.  

== Changelog ==

== Upgrade Notice == 
