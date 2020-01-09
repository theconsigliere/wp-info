<?php

// Creating widget hook


// FUNCTIONS.PHP -------------------------------------------------------------------------------------------------

// Setup Widget Areas
function wphooks_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Main Sidebar', 'wphooks' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphooks' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ]);
  }
  // add_action( $hook, $function )
  add_action( 'widgets_init', 'wphooks_widgets_init' );




?>