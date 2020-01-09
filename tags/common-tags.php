<?php

// Display the ID of the current item in the wp loop

the_ID();

?>

<article id='post-<?php the_ID(); ?>'>
</article>

<?php // in the loop you can access the ID throuph the wp_query ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id='post-<?php echo $post->ID; ?>'>
</article>

<?php endwhile; endif ?>




<?php  

//displays title

the_title();   


//the_title( string $before = '', string $after = '', bool $echo = true )

the_title( '<h2><a href="' . get_the_permalink() . '">', '</a></h2>') ;


?>


<?php

// shows page or post content

the_content();
?>

<div class="entry-content">

    <?php the_content(); 

// Strip teaser content before the more text

 the_content( '', true ); ?>

</div>


<?php

// shows the excerpt of a page or post
the_excerpt();

?>

<?php

//Display category list for a post in either HTML list or custom format.

the_category();

?>

<div class="byline">
    <?php esc_html_e('categories:', 'wptags'); 

// use single or multiple to show multiple or single categoies
 the_category(', ', 'multiple'); ?>


</div>


<?php

//retrieve tags for a post

the_tags(); ?>


<div class="byline">

    <?php

// adds commas between tags
 the_tags('tags: ', ', '); ?>


</div>


<?php

// The author of a post can be displayed by using this Template Tag. This tag must be used within The Loop.

 the_author(); 
 ?>
























?>