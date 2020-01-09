<?php

// Function for learning how to add options
// SQL Query: SELECT * FROM wp_options WHERE option_name = "wpplugin_option";
function wpplugin_options() {

  // Add a new option.
  add_option( 'wpplugin_option', 'My NEW Plugin Options' );

  // Update the value of an option that was already added.
  update_option( 'wpplugin_option', 'My Updated Plugin Options' );
  // delete_option( 'wpplugin_option' );

}
// High level hook
add_action( 'admin_init', 'wpplugin_options' );
