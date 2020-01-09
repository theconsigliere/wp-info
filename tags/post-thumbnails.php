<?php


//Enable post thumbnails in functions.php

add_theme_support('post-thumbnails');

//or

add_theme_support('post-thumbnails', ['post', 'page']); 


// Post Thumbnail


// also known as featured image on the backend

if (has_post_thumbnail()) :


$attr = [

'class' => 'img featured',
'title' => get_the_title()

];


the_post_thumbnail($size, $attr);


endif;













?>

