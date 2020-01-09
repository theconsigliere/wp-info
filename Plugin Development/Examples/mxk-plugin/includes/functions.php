<?php

// SETTING UP PAGES MENU ITEM

function mk_ui_default_sub_pages() {

    // Can add page as a submenu using the following:
  
  
    // CHANGE THIS FUNCTION TO SUIT
    add_management_page(
              // title on wp plugin menu page
              'MK UI Treatment',
               // name in WordPress admin menu
               'MK UI Treatment',
                // User Role
               'manage_options',
               // menu slug
               'mk_ui',
               // callback function to output content for plugin page
               'wpplugin_settings_page_markup',
               // position in menu order
                100
    
    );
  
  }
  add_action( 'admin_menu', 'mk_ui_default_sub_pages' );


// SETTINGS PAGE MARKUP

function wpplugin_settings_page_markup()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }
    ?>
    
    <div class="wrap">
      <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
      <p><?php esc_html_e( 'This is the begining', 'mk_ui' ); ?></p>
    </div>
    <?php
}


// Add a link to your settings page in your plugin
function mk_ui_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=mk_ui">' . __( 'Settings', 'mk_ui' ) . '</a>';
    // push to array
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'mk_ui_add_settings_link' );


?>