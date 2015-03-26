<?php
//use this file for custom functons and activating "sleeping" wordpress features

//allow you to attach a "featured image" to each post or page
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'audio', 'video', 'image', 'quote') );
add_theme_support( 'custom-background' );

//don't forget to display header in header.php
add_theme_support( 'custom-header', array(
		'width' => 1280,
		'height' => 720,
	) );

//activates html5 forms - better for mobile devices
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'comment-list' ) );

//adds <link> elements in the head to your feeds
add_theme_support( 'automatic-feed-links' );

add_image_size( 'big-banner', 1300, 300, true );

/**
 * Improve Excerpts - change the length and annoying [...] symbol
 */
function awesome_ex_length(){
	if(is_search()){
		return 70; //default is 55 words
	}else{
		return 20;
	}
}
add_filter('excerpt_length', 'awesome_ex_length');

//replaces [...] with read more
function awesome_readmore(){

}







//don't close PHP!