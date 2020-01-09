<?php

// Taxonomies
//-----------------------------------------------------------------------------------

/*
WP_Query is nice enough to offer a simple way to make advanced taxonomy queries as well. 
This is especially useful for websites with complex set-ups and for commercial themes 
with large feature sets. The mechanism used is called 
* ! tax_query. 
Let’s look at an example.

 
Say you have a website all about movies. You store movies in a custom “movie” post type; 
you have a custom taxonomy for genre, a custom taxonomy for actors, and you use the 
regular ol’ category to indicate how good a movie is. Let’s find all “Action” movies 
starring “Bruce Willis” that aren’t “Bad”:

While this hardcoded example would be useful only to people who love Die Hard, 
it’s not hard to see how an advanced filter can be built that lets users filter 
through your content in any which way they want.

https://developer.wordpress.org/reference/classes/wp_query/

*/

$args = array(
    'post_type' => 'movie',
    'tax_query' => array(
       'relation' => 'AND',
       array(
          'taxonomy' => 'category',
          'field' => 'slug',
          'terms' => array('bad'),
          'operator' => 'NOT IN'
       ),
       array(
          'taxonomy' => 'genre',
          'field' => 'slug',
          'terms' => array('action')
       ),
       array(
          'taxonomy' => 'actor',
          'field' => 'slug',
          'terms' => array('Bruce Willis'),
       )
    )
 );