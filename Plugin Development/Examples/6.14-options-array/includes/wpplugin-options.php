<?php

// Function for learning how to add options
function wpplugin_options() {

 $options = [
   'First Name',
   'Second Option',
   'Third Option'
 ];

  $options = [];
  $options['name']      = 'Zac Gordon';
  $options['location']  = 'Washington, D.C.';
  $options['sponsor']   = 'Plugin Co.';


  // if option doesn't exisit add the option to the database

  if( !get_option( 'wpplugin_option' ) ) {
      add_option( 'wpplugin_option', $options );
  }

  // if it does exist update the query
  
  update_option( 'wpplugin_option', $options );
  // delete_option( 'wpplugin_option' );

}
add_action( 'admin_init', 'wpplugin_options' );
