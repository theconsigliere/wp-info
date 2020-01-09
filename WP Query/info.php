<?php

//  Summary

// If you’ve been around WordPress for a while you know how difficult it used to be to create post lists 
// based on complex criteria while also conforming to WordPress standards. Over the course of a few years 
// the platform has come a long way. By utilising the power of the WP_Query class, we can lists posts in 
// any way we want.


// Keep in mind that more queries mean more server load. I’ve found that on hosted systems, complex queries 
// can be especially naughty because they eat at your RAM, which is probably your scarcest resource.


// What Is WP_Query?

/*
The WP_Query class is one of the most important parts of the WordPress codebase. 
Among other things, it determines the query you need on any given page and pulls posts accordingly. 

It also saves a lot of information about the requests it makes, which helps a great deal when optimizing pages 
(and troubleshooting them).

The other role of WP_Query is to enable us to perform complex database queries in a safe, simple and modular manner.

https://www.smashingmagazine.com/2013/01/using-wp_query-wordpress/
https://developer.wordpress.org/reference/classes/wp_query/
*/