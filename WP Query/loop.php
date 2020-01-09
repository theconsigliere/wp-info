<?php

$args = array(
    'cat' => 4
);

// By instantiating a class with the constructed argument array, 
// WP_Query will try to pull the posts specified and a load of other details.
$postlist = new WP_Query($args);


// Create the Loop using methods of the objects

//  Instead of have_posts(), use $category_posts->have_posts().
// Instead of the_post(), use $category_posts->the_post()

if ($postlist -> have_posts() ) : while ( $postlist -> have_posts() ) : $postlist -> the_post();

the_title();
the_content();

endwhile; else: endif;


//-----------------------------------------------------------------------------------

/*
If you look at this in detail, you will find that the global $post object is also available. 
This means that if you use a custom loop like this within another loop, things can go wrong. 
Be sure to store the original value of the $post object and restore it after the loop.
*/

$temp_post = $post; // Storing the object temporarily
$my_query = new WP_Query();
while($my_query->have_posts()) {
   // Loop in here
}
$post = $temp_post; // Restore the value of $post to the original

// If you call the_post() on on a custom query, be sure to call wp_reset_postdata() after 
// the endwhile for not editing the main query.
wp_reset_postdata();