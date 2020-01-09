<?php

comments_template(); // - load comments.php

// comments.php - Template form comment code

get_comments_number(); // total number of comments

wp_list_comments(); // lists comments

comment_form(); // displays the comment form



// CUSTOMISING COMMENTS


// 1. Turn on comments in dashboard > discussion > Start with comments.php from a default WP theme

// 2. Use CSS and editing comments.php

//3. 

wp_list_comments(); // has a callback function to override how individual comments are displayed

// 4. extend 
Walker_Comment(); //class override how all comments are listed (less common)






?>