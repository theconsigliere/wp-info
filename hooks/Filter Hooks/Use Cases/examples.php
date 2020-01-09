<?php

// Using different Filter hooks to edit the WordPress Experience

excerpt_length();

login_redirect();

caldera_forms_render_field_type();

// -------------------------------------------------------------------------------------------------


// PRACTICE 1 - Change the length of post excerpts
function wphooks_excerpt_length( $length_in_words ) {

    $new_length_in_words = 20;
    return $new_length_in_words;
  
  }
  add_filter( 'excerpt_length', 'wphooks_excerpt_length', 20 );


// -------------------------------------------------------------------------------------------------


// PRACTICE 2 - Login Redirect
function wphooks_members_login_redirect( $redirect_to, $request, $user ) {


    if ( isset( $user->roles ) && is_array( $user->roles ) ) {

        if ( !in_array( 'administrator', $user->roles ) ) {

            return home_url( '/members' );

        } else {

            return $redirect_to;
        }

    }

    return;
}
add_filter( 'login_redirect', 'wphooks_members_login_redirect', 10, 3 );

// Template Redirect for Members Page
function wphooks_members_logged_out_redirect() {

  if( is_page( 'members' ) && ! is_user_logged_in() )
  {
      wp_redirect( home_url( '/sign-up/' ) );
      die;
  }
  if( is_page( 'sign-up' ) && is_user_logged_in() )
  {
      wp_redirect( home_url( '/members/' ) );
      die;
  }

}
add_action( 'template_redirect', 'wphooks_members_logged_out_redirect', 10 );

  
  
// -------------------------------------------------------------------------------------------------


// PRACTICE 3 - caldera_forms_render_field_type
// replace btn in caldera forms button class to button

function wphooks_change_caldera_button_class( $field_html ) {

    $new_field_html = str_replace( 'btn', 'button', $field_html  );
    return $new_field_html;

};

// add the filter
add_filter( 'caldera_forms_render_field_type-button', 'wphooks_change_caldera_button_class', 10, 1 );




?>