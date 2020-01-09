<?php

// in ROOT PLUGIN FILE

//-------------------------------------------------------------------------------

// Defines a named constant 
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// grab all the styles from this file

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');


// IN WPPLUGIN-STYLES.PHP / WPPGIN-SCRIPTS.PHP
//-------------------------------------------------------------------------------

// Load CSS on all admin pages
function wpplugin_admin_styles() {

    wp_enqueue_style(

      'wpplugin-admin',
      //use defined constant to get link to styles
      WPPLUGIN_URL . 'admin/css/wpplugin-admin-style.css',
      // no dependencies
      [],
      // prevent the CSS or JS from being cached during development.
      time()
    );
  
  }
  add_action( 'admin_enqueue_scripts', 'wpplugin_admin_styles' );
  
  
  // Load CSS on the frontend
  function wpplugin_frontend_styles() {
  
    wp_enqueue_style(
      'wpplugin-frontend',
        //use defined constant to get link to styles
      WPPLUGIN_URL . 'frontend/css/wpplugin-frontend-style.css',
         // no dependencies
      [],
      //prevent the CSS or JS from being cached during development.
      time()
    );
  }
  add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_styles', 100 );

  // ---------------------------------------------------------------------------------------

  // Load JS on all admin pages
function wpplugin_admin_scripts() {

    wp_enqueue_script(
      'wpplugin-admin',
      WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
      // dependencies
      ['jquery'],
      // prevent the CSS or JS from being cached during development.
      time()
    );
  
  }
  add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts', 100 );
  
  
  // Load JS on the frontend
  function wpplugin_frontend_scripts() {
  
    wp_enqueue_script(
      'wpplugin-frontend',
      WPPLUGIN_URL . 'frontend/js/wpplugin-frontend.js',
            // dependencies
      [],
      // prevent the CSS or JS from being cached during development.
      time()
    );
  }
  add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_scripts', 100 );

?>



