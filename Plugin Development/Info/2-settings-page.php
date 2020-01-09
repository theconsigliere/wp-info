<?php

// under plugin-header


function wpplugin_settings_page()
{
    add_menu_page(
        // title on wp plugin menu page
        'Plugin Name',
        // name in WordPress admin menu
        'Plugin Menu',
        // User Role
        'manage_options',
        // slug added to url
        'wpplugin',
        // callback function
        'wpplugin_settings_page_markup',
        // Icon in WordPress admin menu
        'dashicons-wordpress-alt',
        // Priority (lower number changes place in WordPress admin menu)
        100
    );

}
add_action( 'admin_menu', 'wpplugin_settings_page' );


function wpplugin_settings_page_markup()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }
    ?>
    
    <div class="wrap">
      <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
      <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
    </div>
    <?php
}


?>