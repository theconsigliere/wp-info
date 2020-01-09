<?php


// STEP 1. FUNCTIONS.PHP -------------------------------------------------------------------------------------------------

function wphooks_loop_end_marketing() {

    // if not in main loop of page dont run (stop function running in widget area for example)
    if ( !in_the_loop() ) return;
    locate_template( 'template-parts/marketing.php', true );
}

add_action( 'loop_end', 'wphooks_loop_end_marketing', 10 ); 


// STEP 2. MARKETING.PHP ------------------------------------------------------------------------------------------------- ?>

<div class="class">
<h2>Sign up!</h2>
<p>join our marketing list</p>
<?php echo do_shortcode( '[this/is/a/shortcode]') ?>
</div>


<?php // Will show at end of loop on page




?>