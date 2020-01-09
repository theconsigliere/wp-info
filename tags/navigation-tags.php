<?php

// goes in header.php

$args = [
    // Location pickable in Customizer
    'theme_location'  =>  'main-menu',
    // Assigns a default menu to location
    'menu'            =>  'Main Menu',
    // Main wrapper around the ul of posts
    'container'       =>  'div',
    'container_class' =>  'container-class',
    'container_id'    =>  'container-id',
    // Wrapper for menu items - defaults to ul
    'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'menu_class'      =>  'items-wrap-class',
    'menu_id'         =>  'items-wrap-id',
    // Add text before link text (outside a tag)
    'before'          =>  '<',
    'after'           =>  '>',
    // Add text to link text (inside a tag)
    'link_before'     =>  '{',
    'link_after'      =>  '}',
    // Depth of child nav items to show
    'depth'           =>  0,
    // Callback function if menu is not available
    'fallback_cb'     =>  'wp_page_menu',
  ];
  wp_nav_menu( $args );


// IN FUNCTIONS.PHP

register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu',  $textdomain)
]);



?>