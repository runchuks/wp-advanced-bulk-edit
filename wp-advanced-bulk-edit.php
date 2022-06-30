<?php
/**
 * Plugin Name: WordPress Advanced Bulk Edit
 * Version: 1.0.1
 * Plugin URI: http://www.greenwiremedia.com/
 * Description: WordPress Advanced Bulk Edit
 * Author: JV@GWM
 * Author URI: http://www.greenwiremedia.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 */

require 'plugin-update-checker/plugin-update-checker.php';
$UpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/runchuks/wp-advanced-bulk-edit',
	__FILE__,
	'wp-advanced-bulk-edit'
);
$UpdateChecker->setBranch('main');