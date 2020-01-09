<?php

//https://developer.wordpress.org/themes/basics/conditional-tags/


if ( is_user_logged_in() ):
    echo 'Welcome, registered user!';
else:
    echo 'Welcome, visitor!';
endif;


// if you have too many conditional tags you may be doing it wrong.




?>