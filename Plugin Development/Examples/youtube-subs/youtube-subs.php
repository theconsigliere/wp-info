<?php 

/**
 * Plugin Name:       Youtube Subs
 * Plugin URI:        https://maxwellkirwin.co.uk/
 * Description:       Display youtube sub button and count
 * Version:           1.10.3
 * Author:            Maxwell Kirwin
 * Author URI:        https://maxwellkirwin.co.uk/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mksubs
*/



// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}

// include file into another file

// include throws a warning and require throws a fatal error and ends the script when a file cannot be found. Simple as that!

require_once(plugin_dir_par(__FILE__) . '/includes/youtubesubs-scripts.php');   

?>