<?php 

/**
 * Plugin Name:       MK UI Treatment
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Creates Amazing Features
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Maxwell Kirwin
 * Author URI:        https://maxwellkirwin.co.uk/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mk_ui
*/

// Defines a named constant 
define( 'mk_ui_URL', plugin_dir_url( __FILE__ ) );


// Include the functions of the plugin

include( plugin_dir_path( __FILE__ ) . 'includes/functions.php');

// include styles of the plugin
include( plugin_dir_path( __FILE__ ) . 'includes/styles.php');