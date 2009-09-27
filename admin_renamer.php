<?php
/*
Plugin Name: Admin renamer extended
Plugin URI: http://www.websitefreelancers.nl
Description: Lets you rename all admin usernames.
Version: 1.0 (Works with WP 2.8.4)
Author: Ramon Fincken
Author URI: http://www.websitefreelancers.nl
*/

if (!defined('PLUGIN_ADMIN_RENAMER_DIR')) {
	define('PLUGIN_ADMIN_RENAMER_DIR', WP_PLUGIN_DIR . '/' . plugin_basename(dirname(__FILE__)));
}

if (!defined('PLUGIN_ADMIN_RENAMER_BASENAME')) {
	define('PLUGIN_ADMIN_RENAMER_BASENAME', plugin_basename(__FILE__));
}

// Admin only :)	
if (is_admin()) {
	require_once PLUGIN_ADMIN_RENAMER_DIR . '/admin.php';
}

// require_once PLUGIN_ADMIN_RENAMER_DIR . '/langconst.php';
?>