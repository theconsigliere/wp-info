<?php

function wpplugin_settings() {

  // If plugin settings don't exist, then create them
  if( !get_option( 'wpplugin_settings' ) ) {
      add_option( 'wpplugin_settings' );
  }

  // Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'wpplugin_settings_section',
    // Section Title
    __( 'Plugin Settings Section', 'wpplugin' ),
    // Callback for an optional description
    'wpplugin_settings_section_callback',
    // Admin page to add section to
    'wpplugin'
  );

  add_settings_field(
    // Unique identifier for field
    'wpplugin_settings_custom_text',
    // Field Title / label
    __( 'Custom Text', 'wpplugin'),
    // Callback for field markup
    'wpplugin_settings_custom_text_callback',
    // Page to go on
    'wpplugin',
    // Section to go in
    'wpplugin_settings_section'
  );

  
  register_setting(
    //group
    'wpplugin_settings',
    //specific setting we are registering
    'wpplugin_settings'
  );

}
add_action( 'admin_init', 'wpplugin_settings' );

function wpplugin_settings_section_callback() {

  esc_html_e( 'Plugin settings section description', 'wpplugin' );

}

// DISPLAY INPUT FIELD ON SETTINGS PAGE 

// for each field setup markup

function wpplugin_settings_custom_text_callback() {

  // get array of plugin settings
  $options = get_option( 'wpplugin_settings' );

  $custom_text = '';
  
  //findout if custom_text is available, if not esc
	if( isset( $options[ 'custom_text' ] ) ) {

    // get what we have in the database
		$custom_text = esc_html( $options['custom_text'] );
	}

  // echo out our custom field
  // important get name value right
  echo '<input type="text" id="wpplugin_customtext" name="wpplugin_settings[custom_text]" value="' . $custom_text . '" />';

}
