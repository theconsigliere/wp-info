<?php

// ADD SUBPAGES
// VIA A ACTION HOOK
//--------------------------------------------------------------------------

function wpplugin_sub_settings_pages()
{

  add_submenu_page(
      // slug
    'wpplugin',
    // add submenu page under the wpplugin option in admin area
    __( 'Plugin Feature 1', 'wpplugin' ),
    // name thats displayed in admin area
    __( 'Feature 1', 'wpplugin' ),
    'manage_options',
    // give it a slug to add to permalink
    'wpplugin-feature-1',
    // callback function
    'wpplugin_settings_subpage_markup'
  );

  add_submenu_page(
      //slug
    'wpplugin',
     // add submenu page under the wpplugin option in admin area
    __( 'Plugin Feature 2', 'wpplugin' ),
    // name thats displayed in admin area
    __( 'Feature 2', 'wpplugin' ),
    'manage_options',
    // give it a slug to add to permalink
    'wpplugin-feature-2',
    // callback function
    'wpplugin_settings_subpage_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_sub_settings_pages' );


//--------------------------------------------------------------------------

// CALLBACK FUNCTION TO DISPLAY PAGE INFORMATION ON SUB SETTING PAGE

//--------------------------------------------------------------------------

function wpplugin_settings_subpage_markup()
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


// ADD SUBPAGE TO EXISTING GROUP IE TOOLS, APPEARANCE, PAGES & ETC

//--------------------------------------------------------------------------

function wpplugin_default_sub_pages() {

  // Can add page as a submenu using the following:
  // add_dashboard_page()
  // add_posts_page()
  // add_media_page()
  // add_pages_page()
  // add_comments_page()
  // add_theme_page()
  // add_plugins_page()
  // add_users_page()
  // add_management_page()
  // add_options_page()


  // CHANGE THIS FUNCTION TO SUIT
  add_dashboard_page(
    __( 'Cool Default Sub Page', 'wpplugin' ),
    __( 'Custom Sub Page', 'wpplugin' ),
    'manage_options',
    'wpplugin-subpage',
    'wpplugin_settings_page_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_default_sub_pages' );

?>





?>