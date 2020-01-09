<?php 

do_action();
add_action();
remove_action();

// where do_action() occurs we have an action hook

// provides opening for us to run our own code

do_action('hook name'); // creates an action hook

do_action('hook name', $arg, $arg); // pass in argument



//index.php

do_action('before_footer'); // creates an action hook
get_footer();


//functions.php

// add action, supply function when action is told to run, priority, run argument
add_action('before_footer', 'callback_function', 10, $arg); //hook in code

remove_action('before_footer', 'callback_function', 10); //unhook code



?>