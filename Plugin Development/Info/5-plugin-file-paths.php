<?php

// IMPORTANT TO SETP AS CONSTANT SO THEY CAN BE REUSED

// this takes us from plugin folder into our main plugin file ie 6.07-plugin-file-paths/6.07-plugin-file-paths.php
$wpplugin_plugin_basename = plugin_basename( __FILE__ );

// Get the directory of the current file ie app/public/wp-content/plugins/6.07-plugin-file-paths/
$wpplugin_plugin_dir_path = plugin_dir_path( __FILE__ );

// the absolute URL to the plugins or mu-plugins directory, ie https://wordpress.dev/wp-content/plugins
$wpplugin_plugins_url_default = plugins_url();

// the $path relative to the parent directory of that file ie https://wordpress.dev/wp-content/plugins/6.07-plugin-file-paths/includes
$wpplugin_plugins_url = plugins_url( 'includes', __FILE__ );

// Get the URL directory path (with trailing slash) for the plugin __FILE__ passed in ie https://wordpress.dev/wp-content/plugins/6.07-plugin-file-paths/
$wpplugin_plugin_dir_url = plugin_dir_url( __FILE__ );


?>