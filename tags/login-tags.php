<?php

wp_loginout();
wp_logout_url();
wp_login_url();
wp_login_form();
wp_lostpassword_url();
wp_register();
is_user_logged_in();

// Display the Log in / out link
wp_loginout($redirect, $echo);

// retrives the login url
wp_login_url($redirect, $fource_reauth);

// retrives the logout url
wp_logout_url($redirect);


// IN USE

// after log in redirects to previous page
wp_loginout( get_permalink() );

// if user is not logged in show login form
if ( !is_user_logged_in() ):

$args = [
 'label_username' => 'Enter username',
 'label_password' => 'Enter your password'
];

wp_login_form( $args );

endif;

// Returns the URL that allows the user to retrieve the lost password

wp_lostpassword_url();

// display the registration or admin link

wp_register();



?>