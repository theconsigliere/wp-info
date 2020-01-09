<?php


// add an Advertisement at the end of page content -----------------------------------------------------------------


// ----------------------------------------------------------------------------------------

// FUNCTIONS.php


// Add an ad after middle paragraph in content
function wptags_content_ads( $content ) {

    // check we are in page loop
    if( !in_the_loop() ) {
      return;
    }
  
    $paragraphs;
  
    // Search for any text wrapped in paragraph tags
    $pattern = "/<p>.*?<\/p>/m";
    // Perform a global regular expression match // https://www.php.net/manual/en/function.preg-match-all.php
    $p_count = preg_match_all( $pattern, $content, $paragraphs );
    $paragraphs = $paragraphs[0];
  
    // Find the middle paragraph
    $ad_p_number = floor( $p_count / 2 );
    if( 0 == $ad_p_number ) $ad_p_number = 1;
    // text of paragraph we want to add add after
    $ad_p = $paragraphs[ $ad_p_number - 1 ];
  
    // Create the ad
    $post_ad = '<div class="post-ad"><h2>Post Add</h2></div>';
    $ad_p_w_ad = '<p>' . $ad_p . '</p>' . $post_ad;
  
    // Replace the original paragraph
    // With the paragraph with the ad
    $content_w_ad = str_replace( $ad_p, $ad_p_w_ad, $content );
  
    // Return new content with ad
    return $content_w_ad;
  }
  add_filter( 'the_content', 'wptags_content_ads', 10 );


?>













