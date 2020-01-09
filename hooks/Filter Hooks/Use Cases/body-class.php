<?php


// Customise class that <?php body_class(); outputs -----------------------------------------------------------------


// ----------------------------------------------------------------------------------------

// FUNCTIONS.php

function wphooks_custom_body_classes( $classes ) {

    if( 'page' === get_post_type() ) {
        // add to array
      $classes[] = 'wphooks-page';
    }
  
    return $classes;
  
  }
  add_filter( 'body_class', 'wphooks_custom_body_classes' );

?>