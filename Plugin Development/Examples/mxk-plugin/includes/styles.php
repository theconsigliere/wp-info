<?php


// Load CSS on all admin pages
function mk_ui_admin_styles() {

    wp_enqueue_style(

      'mk_ui-admin',
      //use defined constant to get link to styles
      mk_ui_URL . 'includes/css/style.css',
      // no dependencies
      [],
      // prevent the CSS or JS from being cached during development.
      time()
    );
  
  }
  add_action( 'admin_enqueue_scripts', 'mk_ui_admin_styles' );
  
  































?>