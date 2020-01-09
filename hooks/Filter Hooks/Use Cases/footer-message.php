<?php


// Create Uppercase Footer Message -----------------------------------------------------------------

// FOOTER.php 
 $footer_message = '&copy;' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?>

<?php // create a filter (wphooks_footer_message) and pass in varible we want to filter ?>

<p><?php echo apply_filters( 'wphooks_footer_message', $footer_message ); ?></p>


<?php 
// ----------------------------------------------------------------------------------------

// FUNCTIONS.php


// Apply Filter to wphooks_footer_message
function wphooks_make_uppercase( $message ) {

    // turn title to uppercase
  $new_message = strtoupper( $message );
  return $new_message;

}
add_filter( 'wphooks_footer_message', 'wphooks_make_uppercase', 15 );
// remove_filter( 'wphooks_footer_message', 'wphooks_make_uppercase', 15 );


?>













