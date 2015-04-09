<?php
/*
Plugin Name: Random Admin Color Scheme
Plugin URI: http://foobla.com/wordpress-goodies/random-admin-color-scheme
Description: Change admin color scheme randomly, no longer boring color scheme
Version: 1.0
Author: foobla
Author URI: http://foobla.com
*/

defined( 'DS' ) or define( 'DS', DIRECTORY_SEPARATOR );

function random_admin_color_scheme_init() {
	$user                 = get_current_user_id();
	$path_to_color_folder = getcwd() . DS . 'css' . DS . 'colors';
	$dirs                 = array_filter( glob( $path_to_color_folder . DS . '*' ), 'is_dir' );
	$color_array          = array();
	$color_array[]        = 'fresh';
	foreach ( $dirs as $fileinfo ) {
		$sub_folders   = explode( DS, $fileinfo );
		$color_array[] = end( $sub_folders );
	}
	update_user_meta( $user, 'admin_color', $color_array[array_rand( $color_array, 1 )] );

}

add_action( 'init', 'random_admin_color_scheme_init' );