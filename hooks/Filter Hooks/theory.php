<?php

apply_filters();

// Calls the callback functions that have been added to a filter hook.
// https://developer.wordpress.org/reference/functions/apply_filters/


$filtered = apply_filters('filter_name', $what_we_want_to_filter, $arg);

// EXAMPLE 

// default message from WordPress
$default_msg = esc_html_('Welcome', 'wp_hooks');

// we take the message, filter it by customizing and save as new variable
$new_msg = apply_filters('welcome_message', $default_msg );

// echo new variable
echo $msg;

// -------------------------------------------------------------------------------


add_filters();

//Hook a function or method to a specific filter action.
//https://developer.wordpress.org/reference/functions/add_filter/


// in FUNCTIONS.PHP

add_filter('filter_name', 'callback_function', $priority);



// EXAMPLE

// header.php
$msg = apply_filters('welcome_message', $default_msg, $user );

// functions.php

function user_welcome( $msg, $user ) {
   $new_msg = $msg . '' . $user ->first_name . '!';
   return $new_msg;
}

// priority means it will happen after initial function hooks
add_filter('welcome_message', 'user_welcome', 100 );



// -------------------------------------------------------------------------------


remove_filter();

// Removes a function from a specified filter hook.
// https://developer.wordpress.org/reference/functions/remove_filter/


remove_filter('filter_name', 'callback_function', $priority);


// EXAMPLE

//functions.php

add_filter('welcome_message', 'user_welcome', 100 );
remove_filter('welcome_message', 'user_welcome', 100 );


// -------------------------------------------------------------------------------

//FILTER REFERENCE

// https://codex.wordpress.org/Plugin_API/Filter_Reference



?>


