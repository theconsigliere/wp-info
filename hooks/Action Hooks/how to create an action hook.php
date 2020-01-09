<?php

// Creating our own hook


// STEP 1. run action in FOOTER.PHP --------------------------------------------------------------------------------------
do_action( 'wphooks_before_footer' ); 


// STEP 2. FUNCTIONS.PHP -------------------------------------------------------------------------------------------------

 // Display custom footer message
function wphooks_before_footer_message() {

  // Retrieve the name of the highest priority template file that exists.
  // locate_template( $template_names, $load, $require_once )
  locate_template( 'template-parts/before-footer.php', true );

}

// STEP 3. HOOKING 'wphooks_before_footer_message' FUNCTION INTO 'wphooks_before_footer' ----------------------------------


add_action( 'wphooks_before_footer', 'wphooks_before_footer_message', 10 ); 
// remove_action( 'wphooks_before_footer', 'wphooks_before_footer_message', 10 ); 


// STEP 4. CREATE before-footer.php in TEMPLATE PARTS and add the below ---------------------------------------------------- ?>

<p><?php _e( 'My custom footer template!', $textdomain ); ?></p>





?>