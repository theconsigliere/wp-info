<?php

// Permalink

// Displays the permalink for the current post.

the_permalink() ?>


<a href="<?php the_permalink(); ?>"></a>

<?php // grabs the value and adds it as a link to the the title?>

<?php the_title( '<h2><a href="' . get_the_permalink() . '">', '</a><?h2>'); ?>

<?php


// Title Attribute

//Sanitize the current title when retrieving or displaying.


 the_title_attribute(); ?>

<a href="<?php the_permalink(); ?>" title='<?php the_title_attribute(); ?>'></a>


<?php


// Shortlink

//Displays the shortlink for a post.

the_shortlink();

?>

<p><?php 

// Displays link with the specified text.

the_shortlink('shorlink'); ?>



<?php 

//Returns a shortlink for a post, page, attachment, or site.

echo wp_get_shortlink(); ?></p>


<?php


// Meta

//Display a list of post custom fields.


the_meta();

?>

<p><?php 

// if there is meta data with name of location run loop

if ( !empty( get_post_meta( $post->ID, 'Location' ) ) ): 

// Retrieves a post meta field for the given post ID.
//often used in the loop

//true gets a single value leaving it blank grabs an array of values
echo get_post_meta( $post->ID, 'location', true ); 

endif; ?>
</p>