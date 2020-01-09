<?php

// saving data to the options table in wordpress

// INSTALL DATABASE BROWSER PLUGIN 

// under tools taking a quick look into the database 

// ----------------------------------------------------------------------------------------


// Function for learning how to add options
// SQL Query: SELECT * FROM wp_options WHERE option_name = "wpplugin_option";
function wpplugin_options() {


    if ( get_option( 'wpplugin_option' ) ) {

    // Add a new option.
    add_option( 'wpplugin_option', 'My NEW Plugin Options' );

    }

    // Update the value of an option that was already added.
    update_option( 'wpplugin_option', 'My Updated Plugin Options' );
    // delete_option( 'wpplugin_option' );
  
  }
  // High level hook
  add_action( 'admin_init', 'wpplugin_options' );

// ----------------------------------------------------------------------------------------

// Display database entry in settings page markup

?>


<div class="wrap">
  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
  <p><?php esc_html_e( 'Option:', 'wpplugin' ); ?></p>
  <?php // echoes out the option ?>
  <p><?php esc_html_e( get_option( 'wpplugin_option' ) ); ?></p>  
</div>

