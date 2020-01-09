<?php

single_post_title();
post_type_archive_title();
single_cat_title();
single_tag_title();
single_term_title();
single_month_title();

get_archives_link();
wp_get_archives();


// Display or retrieve page title for post outside loop ?>
<h1><?php single_post_title( 'Post: '); ?></h1>


<?php

// Display or retrieve title for a post type archive
post_type_archive_title();

// Display or retrieve title for category archive
single_cat_title( 'category: ');

// single_cat and single_tag both call single_term code

// Display or retrieve page title for post archive based on date
single_month_title();


// get_archives_link is called in wp_get_archives so use that instead

// Display archive links based on type and format
wp_get_archives();


$args = [
    'type' => 'weekly',
    'limit' => 10,
    'show_post_count' => true,
    'order' => 'DESC'
];

wp_get_archives($args);


?>