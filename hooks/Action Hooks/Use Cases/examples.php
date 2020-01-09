<?php

// Using different hooks to edit the WordPress Experience

admin_enqueue_scripts();

pre_get_comments();

caldera_forms_render_start();

// if post is draft, custom css edits the backend post editor -------------------------------------------------------------------------------------------------

// PRACTICE 1 - Load Admin Stylesheet
function wphooks_draft_mode_styles() {

    // access global post
    global $post;

  // if not in a post return
    if( ! $post ) return;
  
    //check if draft
    if( 'draft' === $post->post_status ) {
  
        // change backend post screen header
      wp_enqueue_style( 'wphooks-admin-css', get_stylesheet_directory_uri() . '/assets/css/admin.css', [], time(), 'all' );

      // add css to visual editor
      add_editor_style( 'assets/css/visual-editor.css' );
  
    }
  
  }
  add_action( 'admin_enqueue_scripts', 'wphooks_draft_mode_styles' );



// PRACTICE 2 - Show Banner Before Comments  -------------------------------------------------------------------------------------------------


function wphooks_comments_cta() {


    // Only load tempalte if in the loop
    if( in_the_loop() ) {
  
      locate_template( 'template-parts/comment-cta.php', true );
  
    }
  
  }
  add_action( 'pre_get_comments', 'wphooks_comments_cta' );

  
  
  // PRACTICE 3 - Show Message Before Caldera Forms Contact Form -------------------------------------------------------------------------------------------------
  function wphooks_support_message_for_caldera_forms( $form ) {
  
    // if particular caldera form
    if( 'CF59fb1eaf58620' === $form['ID'] ) {

        // locate and echo out template
      locate_template( 'template-parts/contact-form-support-message.php', true );
    }
  
  }
  add_action( 'caldera_forms_render_start', 'wphooks_support_message_for_caldera_forms' );




?>