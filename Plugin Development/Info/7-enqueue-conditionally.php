<?php

// CSS

//-------------------------------------------------------------------------------


// Conditionally load CSS on plugin settings pages only
function wpplugin_admin_styles( $hook ) {


    // 1st register
      wp_register_style(
        'wpplugin-admin',
        WPPLUGIN_URL . 'admin/css/wpplugin-admin-style.css',
        [],
        time()
      );
    
      // 2nd enqueue
      if( 'toplevel_page_wpplugin' == $hook ) {
        wp_enqueue_style( 'wpplugin-admin' );
      }
    
    }
    add_action( 'admin_enqueue_scripts', 'wpplugin_admin_styles' );
    
    
    // Load CSS on the frontend
    function wpplugin_frontend_styles() {
    
    
    // 1st register
      wp_register_style(
        'wpplugin-frontend',
        WPPLUGIN_URL . 'frontend/css/wpplugin-frontend-style.css',
        [],
        time()
      );
    
        // 2nd enqueue
      if( is_single() ) {
          wp_enqueue_style( 'wpplugin-frontend' );
      }
    
    }
    add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_styles', 100 );
    

  // ---------------------------------------------------------------------------------------

  // JS

    // ---------------------------------------------------------------------------------------

    // Conditionally load JS on plugin settings pages only
function wpplugin_admin_scripts( $hook ) {

    wp_register_script(
      'wpplugin-admin',
      WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
      ['jquery'],
      time()
    );
  
    // Allows us to send custom variables to frontend with js on front end ie console.log( wpplugin.hook ) 
    wp_localize_script( 'wpplugin-admin', 'wpplugin', [
        'hook' => $hook
    ]);
  
    if( 'toplevel_page_wpplugin' == $hook ) {
        wp_enqueue_script( 'wpplugin-admin' );
    }
  
  }
  add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts' );
  
  
  // Conditionally load JS on single post pages
  function wpplugin_frontend_scripts() {
  
    wp_register_script(
      'wpplugin-frontend',
      WPPLUGIN_URL . 'frontend/js/wpplugin-frontend.js',
      [],
      time()
    );
  
    if( is_single() ) {
        wp_enqueue_script( 'wpplugin-frontend' );
    }
  
  }
  add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_scripts', 100 );

?>



