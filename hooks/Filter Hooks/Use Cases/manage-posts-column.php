<?php


// Remove info from admin list post page  -----------------------------------------------------------------


// ----------------------------------------------------------------------------------------

// FUNCTIONS.php


// Remove unwanted columns from post listing
function wphooks_customize_post_columns( $columns ) {

    // remove column form array $columns
    unset( $columns['author'] );
    unset( $columns['categories'] );
    unset( $columns['tags'] );
    unset( $columns['comments'] );
    return $columns;
  
  }
  // existing hook and run function in a priority of 100
  add_filter( 'manage_posts_columns', 'wphooks_customize_post_columns', 100 );





// ----------------------------------------------------------------------------------------

// Add post id to admin post list page

// FUNCTIONS.php


 function wphooks_post_id_columns_head( $defaults ) {

     $defaults['ID'] = esc_html__( 'POST ID', 'wphooks' );
     return $defaults;

 }

 // Add Post ID to Column Content
 function wphooks_post_id_columns_content( $column_name, $post_id ) {

     if ( $column_name == 'ID' ) {

       echo $post_id;

     }

 }

 add_filter('manage_posts_columns', 'wphooks_post_id_columns_head');
 add_action('manage_posts_custom_column', 'wphooks_post_id_columns_content', 10, 2);

?>













