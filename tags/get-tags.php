<?php

get_header();
get_footer();
get_sidebar();
get_template_part();
get_search_form();
comments_template();

// gets template header-new.php and displays this
get_header('new');

// gets template footer-new.php and displays this
get_footer('new');

// gets template sidebar-new.php and displays this
get_sidebar('new');

// gets slug name for template & unique specialised template output: content-new.php
get_template_part('content', 'new');

// echos search form
get_search_form();

// $file = file to load, $separate_comments = separate comments by comment type
comments_template( $file, $separate_comments);

?>