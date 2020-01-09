<?php

// Set forms on the settings pages using the settings API


// Settings Page add_menu_page()

// Settings Section add_settings_section()

// Settings Fields add_settings_field()

// Setting Form (on setting page):  <form> settings_fields(), do_settings_sections(), submit_button() </form>

//------------------------------------------------------------------------------------------------------------------

// SETTINGS SECTION


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
      __( 'A Plugin Settings Section', 'wpplugin' ),
      // Callback for an optional description
      'wpplugin_settings_section_callback',
      // Admin page to display section on (this is specified on the add_menu_page() function, use same slug to have it output it there)
      'wpplugin'
    );

// add field
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
  

// MARK UP FOR SETTINGS SECTION

//------------------------------------------------------------------------------------------------------------------

?>
<div class="wrap">

  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>

  <form method="post" action="options.php">
    <!-- Display necessary hidden fields for settings -->
    <?php settings_fields( 'wpplugin_settings' ); ?>
    <!-- Display the settings sections for the page -->
    <?php do_settings_sections( 'wpplugin' ); ?>
    <!-- Default Submit Button -->
    <?php submit_button(); ?>
  </form>

</div>


<?php

//------------------------------------------------------------------------------------------------------------------

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
    ?>
  