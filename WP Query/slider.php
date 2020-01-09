<?php

// Querying for Posts
//-----------------------------------------------------------------------------------

/*
The ease with which we can create loops is obvious, but what about actually querying for posts? 
Let me show you a common technique I use when creating sliders for commercial themes.

In many cases, users of your theme will want a great-looking slider, but they might be a bit 
lazy in creating content. Many users will also want to show future content. Let’s query for 
upcoming (i.e. unpublished) posts that have an attached featured image.
*/


   $args = array(
      'post_status' => 'future',
      'meta_query' => array(
         array(
            'key' => '_thumbnail_id',
            'value' => ’,
            'compare' => '!='
         )
      )
   );
   $slider_posts = new WP_Query($args);
?>

<?php if($slider_posts->have_posts()) : ?>

<div class='slider'>
    <?php while($slider_posts->have_posts()) : $slider_posts->the_post() ?>
    <div class='slide'>
        <?php the_post_thumbnail() ?>
    </div>
    <?php endwhile ?>
</div>

<?php endif ?>