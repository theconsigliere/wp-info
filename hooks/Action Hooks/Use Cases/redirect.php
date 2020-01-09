<?php

// Creating our own redirect that will redirect 
//from sign in page to members page if logged in or from members to sign up page if not logged in


// Create 2 pages sign in & members

// add to FUNCTIONS.PHP  --------------------------------------------------------------------------------------

// Template Redirect for Members Page
function wphooks_members_logged_out_redirect() {

    if( is_page( 'members' ) && ! is_user_logged_in() )
    {
        wp_redirect( home_url( '/sign-up/' ) );
        // tells WordPress to stop at this point (very important in redirects)
        die;
    }
    if( is_page( 'sign-up' ) && is_user_logged_in() )
    {
        wp_redirect( home_url( '/members/' ) );
        die;
    }
  
  }
  add_action( 'template_redirect', 'wphooks_members_logged_out_redirect', 10 );



?>