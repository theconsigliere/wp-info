<?php

// Determines whether the query is for an existing attachment page.


is_attachment();

// checking if attachment is image

wp_attachment_is_image();


//getting data from media library


wp_get_attachment_image();
wp_get_attachment_image_src();
wp_get_attachment_metadata();


?>


<?php 

// checks if attachment page, if so displays div


if( !is_attachment() ) : ?>

    <div class="interesting-stuff">

<h1>show me</h1>

</div>


<?php endif; ?>