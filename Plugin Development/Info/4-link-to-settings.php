<?php

// ADDS LINK IN PLUGIN PAGE VIEW THAT LINKS YOU TO WHERE PLUGIN CAN BE FOUND IE IF HIDDEN IN SETTINGS PAGE

// -----------------------------------------------------------------------------------------------

// Add a link to your settings page in your plugin
function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings', 'wpplugin' ) . '</a>';
    // push to array
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );

?>