<?php


//link tags


the_permalink();
get_permalink();

get_post_permalink();
get_page_link();

get_attachment_link();

edit_post_link();
get_edit_post_link();

get_delete_post_link();
edit_comment_link();
edit_tag_link();



// Continued

home_url();
site_url();

get_home_url();
get_site_url();
get_admin_url();

get_search_link();
get_search_query();
the_feed_link();

//Examples
?>

<?php // Home url link ?>

<a href="<?php  echo esc_url( home_url() )?>"></a>

<?php // edit page link ?>

<?php edit_post_link('Edit this', '<p>', '</p>'); ?>



<?php // Delete post link (to be used in loop) ?>

<a href="<?php echo get_delete_post_link( $post-> ID, '', false ) ?>">

<?php esc_html_e('Delete this', 'textdomain'); ?>

</a>

<?php // echo out searched term ?>

<p><?php echo get_search_query()?></p>