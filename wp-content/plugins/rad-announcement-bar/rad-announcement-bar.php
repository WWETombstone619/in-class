<?php 
/*
Plugin Name: Rad Announcement Bar
Description: Add an eye-catching bar to the top of the page
Plugin URI: http://site-where-plugin-is-hosted.com
Author: Brian Mohler
Author URI: http://brianmohler.com
Version: 0.1
Liscense: GPLv3
*/


/**
 * Add HTML Output to the bottom of every page
 */
add_action( 'wp_footer', 'rad_bar_html' );
function rad_bar_html(){
	//only show on home page
	if( is_front_page() ):	
	?> <!-- Closes PHP so that you can code in HTML-->
	<!-- Rad Announcement Bar by Brian Mohler -->
	<div id="rad-announcement-bar">
		<span>
			This is a really important announcement!
			<a href="#">Click Here!</a>
		</span>
	</div>
	<?php //re-opens php for further php code
	endif;
}

/**
 * Attach style sheet
 */
add_action( 'wp_enqueue_scripts', 'rad_bar_styles' );
function rad_bar_styles(){
	if( is_front_page() ):
		//get url
		$url = plugins_url( 'css/rad-announcement-style.css', __FILE__ );
		//put it on the page
		wp_enqueue_style( 'rad-bar-style', $url );
	endif;
}


//don't close php