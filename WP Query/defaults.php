<?php

// Defaults
//-----------------------------------------------------------------------------------

/*
 * ! posts_per_page 
 Defaults to the value specified in the reading settings for the number of posts to list.

* ! post_type 
Defaults to post.

* ! post_status 
Defaults to publish.

Full list of parameters https://developer.wordpress.org/reference/classes/wp_query/
*/


// Arrays
//-----------------------------------------------------------------------------------

/*
In many cases, you will want to specify a number of values that an argument can take. 
Where it would seem logical, WP_Query usually allows you to use arrays to make your 
life easier. Here are a few examples:

/* You can use an array for
* ! post_status 
to pull posts from a number of different statuses. Note that you can use the string 
* ! any 
to get posts from all statuses.

If you use custom post types, you’ll be happy to hear that you can use an array for the 
value of the 
* ! post_type
parameter as well.

For the taxonomy type parameters 
* ! category__in, tag__in 
and so on, you can use an array to indicate a multitude of values.

*/

// Methods & Properties
//-----------------------------------------------------------------------------------

/*
Once you’ve made a query, you can coax a lot of information out of your object. You can 
find a full list of “Methods and Properties” in the Codex. Here are the ones I tend to 
use most:

* ! $query 
Shows you the query string passed to the $wp_query object. This is quite helpful for 
troubleshooting in some advanced cases.

* ! $query_vars 
Shows an associative array of the arguments you’ve passed. If you do plenty of mixing 
and matching before passing arguments, this tool could be helpful indeed to check that all is well.

* ! $posts 
Holds the requested posts from the database. I rarely use this property, but it’s good to know 
that this is where your items come from.

* ! $found_posts 
A handy little thing that shows the total number of found items (without the limit imposed 
by the posts_per_page argument).
    

    */