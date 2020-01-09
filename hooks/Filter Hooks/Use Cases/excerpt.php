<?php


// add a read more link to excerpt -----------------------------------------------------------------


// ----------------------------------------------------------------------------------------

// FUNCTIONS.php

// Change the read more link for excerpts
function wphooks_read_more_link( $read_more_text ) {

    //gets post object where function should be applied
    global $post;

    $new_read_more = '... <a class="more-link" href="'
                      . get_permalink( $post->ID )
                      . '">'
                      . esc_html__( 'Read More &gt;', 'wphooks' )
                      . '</a>';
  
    return $new_read_more;
  
  }
  add_filter( 'excerpt_more', 'wphooks_read_more_link', 20 );



?>