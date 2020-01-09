<?php

// Hook into title filter in wordpress, when title is echo'd anywhere it runs through this filter 

// ----------------------------------------------------------------------------------------

// FUNCTIONS.php


// Control markup for the_title
function wptags_title_markup( $title, $id ) {

    if ( is_singular() && in_the_loop() ) {

      $title = '<h1>' . $title . '</h1>';

    } else if ( !is_singular() && in_the_loop() ) {

      $title = '<h2><a href="' . get_permalink( $id ) . '">' . $title . '</a></h2>';

    }

    return $title;
}

// hooking into existing filter (the_title) then running our new function (wptags_title_markup), priority is 10, and number of arguments we are passing in are 2
add_filter( 'the_title', 'wptags_title_markup', 10, 2 );


// ----------------------------------------------------------------------------------------


// INDEX.php 

the_title();


?>













