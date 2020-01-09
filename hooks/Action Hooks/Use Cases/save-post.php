<?php

// add DRAFT: to our posts on the backend that are in draft version


// add to FUNCTIONS.PHP  --------------------------------------------------------------------------------------

function wphooks_add_draft_to_titles( $post_id, $post ) {

    // If post revision do not proceed
    if ( wp_is_post_revision( $post_id ) ) {
      return;
    }
  
  
    // Add or remove "DRAFT: " from title depending on status
    if( 'draft' === $post->post_status &&
        'DRAFT: ' !== substr( $post->post_title, 0, 7 ) ) {
  
        // Add 'DRAFT: ' to the title
        $post->post_title = 'DRAFT: ' . $post->post_title;
  
    } elseif ( 'publish' === $post->post_status &&
               'DRAFT: ' === substr( $post->post_title, 0, 7 ) ) {
  
        // Remove 'DRAFT: ' from the title
        $post->post_title = substr( $post->post_title, 7 );
  
    }
  
  
    // If slug starts with 'draft-' remove it
    if( 'draft-' === substr( $post->post_name, 0, 6 ) ) {
  
        $post->post_name = substr( $post->post_name, 6 );
  
    }
  
    // Unhook wphooks_add_draft_to_titles so it doesn't loop infinitely
    remove_action('save_post', 'wphooks_add_draft_to_titles');
  
    // Update the post
    wp_update_post( $post );
  
    // Re-hook wphooks_add_draft_to_titles
    add_action('save_post', 'wphooks_add_draft_to_titles');
  
  
  }
  add_action( 'save_post', 'wphooks_add_draft_to_titles' );


?>