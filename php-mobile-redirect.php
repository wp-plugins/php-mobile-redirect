<?php
/*
Plugin Name: PHP Mobile Redirect
Plugin URI: http://www.code96wd.com/wordpress-plugins/
Description: Easily redirect mobile users to the mobile version of your site.     
Version: 1.4
Author: Matthew Smith
Author URI: http://www.code96wd.com
License: GPL2
*/



/*********************************
* Global Variables
*********************************/
	$pmr_options = get_option('pmr_settings');


/*********************************
* Includes
*********************************/

	include('includes/functions.php');
	include('includes/pmr_admin_form.php');
	include('includes/Mobile_Detect.php');
	