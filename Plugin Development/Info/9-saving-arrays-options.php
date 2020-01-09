<?php

// Function for learning how to add options
function wpplugin_options() {

//  $options = [
//    'First Name',
//    'Second Option',
//    'Third Option'
//  ];

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

// ---------------------------------------------------------------------------

// Settings page markup 

?>

<div class="wrap">
  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>

  <h2><?php esc_html_e( 'All Options', 'wpplugin' ); ?></h2>

  <?php $options = get_option( 'wpplugin_option' ); ?>
  <ul>
  <?php 
  
  //  for each of the plugin options in our array
  // loop through and display on our settings page
  foreach( $options as $option ): ?>
    <li><?php echo $option; ?></li>
  <?php endforeach; ?>
  </ul>


<?php // check to see if certain name option exists ?>

  <?php if( array_key_exists( 'name', $options ) ): ?>
    <h2><?php esc_html_e( 'Specific Option', 'wpplugin' ); ?></h2>
    <p><?php esc_html_e( $options['name'] ); ?></p>
  <?php endif; ?>

</div>



