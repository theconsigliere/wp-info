<?php

//Post tags

// For adding individual class tags to areas ie type-post post-id123 


body_class();

post_class();



//often used like this

?>

<article <?php post_class(); ?>>
</article>

<?php // passing in an array of additional classes ?>

<article <?php post_class(['single', 'blog']); ?>>
</article>


<body <?php body_class(); ?>>
</body>

<?php
?>