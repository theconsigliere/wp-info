<?php

// Library to help with performance and to debug

// get library here https://gist.github.com/Rarst/1739714

// to go in functions.php to include r-debug


// Include R Debug
require( dirname(__FILE__) . '/lib/r-debug.php' );

// call r-debug in index.php like:

R_Debug::list_hooks();

// shows all the hooks in a much more complete simple-to-view list rather than using wp_filter


// to see only scripts that are being enqueued

R_Debug::list_hooks('wp_enqueue_scripts');

// look at the_title
R_Debug::list_hooks('the_title');


// shows all the live hooks on the page and where they are being run
R_Debug::list_live_hooks();

//PLUGINS


// DOWNLOAD & ACTIVATE

// DEBUG BAR plugin by wordpressdotorg & DEBUG BAR actions and filters addon by subharanjan

// adds debug to customize bar

// SIMPLY SHOW HOOKS by cxThemes

// shows a visual representation of hooks that are loaded on the page



?>