<?php

// Meta Data
//-----------------------------------------------------------------------------------

/*
You’ve already seen that WP_Query is great at handling meta data — we used a meta_query 
in the second example to build a slider from posts that have featured images. Just as 
with the taxonomy queries, a lot of flexibility is built in here.

We’re currently building a WordPress theme to be used to create a Web page for apartment(s) 
for rent. We store apartments as a custom post type and use meta data to store the details. 
With a meta query, we can easily pull in all apartments that can house four or more people, 
that have a balcony and that are non-smoking.

Again, this is very modular, very understandable. To learn more about the parameters you can 
use, just visit the “Custom Field Parameters” section in the WP_Query documentation.

https://developer.wordpress.org/reference/classes/wp_query/
*/

$args = array(
    'post_type' => 'apartment',
     'meta_query' => array(
       'relation' => 'AND',
        array(
           'key' => 'persons',
           'value' => '4',
           'compare' => '>=',
           'type' => 'NUMERIC'
        ),
        array(
           'key' => 'balcony',
           'value' => '1',
           'type' => 'BINARY',
           'compare' => '='
        ),
        array(
           'key' => 'smoking',
           'value' => '0',
           'type' => 'BINARY',
           'compare' => '='
        )
     )
 );