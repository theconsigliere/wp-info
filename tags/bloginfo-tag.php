<?php

// bloginfo() provides general information about a WordPress install based on the $string parameter

bloginfo('name'); // Site Title

bloginfo('description'); // Tagline

bloginfo('url'); // Site Address

$site_title = get_bloginfo('url'); // Saves Site Title


?>