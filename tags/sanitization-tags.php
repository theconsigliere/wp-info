<?php

// Sanitize

// Sanitization is the process of cleaning or filtering your input data. 


sanitize_text_field();
sanitize_title();
sanitize_email();
sanitize_html_class();



esc_url_raw();
sanitize_user();
sanitize_option();
sanitize_meta();


// removes html h1 tag
echo sanitize_text_field( "<h1>Header</h1>" ); 

echo sanitize_title( "<h1>Post Title</h1>" ); 

//removes any malicious tags or spaces  outputs: education@zacgordan.com
echo sanitize_email( "edu c<tion>@zacgordon.com" ); 


//removes any malicious tags or spaces  outputs: newclass
echo sanitize_html_class( "new## class*%" ); 

//removes any malicious tags or spaces  outputs: https;//javascript.com
echo esc_url_raw( "https;//`javascript<forwp>.com" ); 



// Escaping

// is the process of cleaning or filtering your output data. 


esc_html();
esc_url();
esc_js();
esc_attr();
esc_textarea();


// outputs tags as regular text output: <h1>Header</h1>
echo esc_html( "<h1>Header</h1>" ); 

// cleans and filters input outputs: https://javascript%20forwp.com
echo esc_url( 'https://javascript <<>forwp.com' ); 

// stops js from executing
echo esc_js( "alert( 'Hello!' );" ); 

// stops tag from showing outputs: span w ID
echo esc_attr( '<"%&h> another 9*&^%$#@!<h1>' ); 

// encodes text for use inside a textarea element outputs: <input type="submit"> (as text)
echo esc_textarea( '<input type="submit">' ); 




// Localization

// Adding tags that will allow us to translate our data


esc_html_e();
esc_html__();
esc_attr_e();
_e();
__();




/*

__() = Return the translated string
_e() = echo the translated string
esc_html__() = Escapes & return the translation string use in HTML output
esc_html_e() = Escapes & echo the translation string use in HTML output
esc_attr__() = Escapes & return the translation string use in an attribute
esc_attr_e() = Escapes & echo the translation string use in an attribute

_n() = Retrieve the plural or single form based on the amount.

_x() = Retrieve translated string with gettext context
_ex() = echo translated string with gettext context
esc_attr_x() = Escapes & return translated string with gettext context use in an attribute
esc_html_x() = Escapes & return translated string with gettext context use in HTML output


*/



// Display translated text.
_e( 'Localization Tags', 'wptags' ); 

// Display translated text that has been escaped for safe use in HTML output also echos to page
esc_html_e( '<h1>Hello!</h1>', 'wptags' ); 
 
// translates and escapes html won't echo to page
$title = esc_html__( '<h1>Hello!</h1>', 'wptags' );  
 

// will translate and wont esc any html
 _e( 'Hello! <em>Em</em>', 'wptags' ); 
 

// Retrieve the translation of text.
__( 'Hello! <em>Em</em>', 'wptags' ); 




?>