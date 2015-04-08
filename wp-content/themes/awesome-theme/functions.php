<?php
//required for auto embeds
if ( ! isset( $content_width ) ) $content_width = 694;

//required for good Comment UX
add_action( 'wp_enqueue_scripts', 'awesome_scripts' );
function awesome_scripts(){
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}

//required since 4.1
add_theme_support( 'title_tag' );


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

//allows you to style te editor window with editor-style.css
add_editor_style();

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

function awesome_readmore(){
	return ' <a href="' . get_permalink() . '" class="readmore">Read More</a>';
}
add_filter( 'excerpt_more', 'awesome_readmore' );



/**
 * Menu Areas
 * Registers two menu areas
 * display them in your theme with wp_nav_menu
 */
		//'init' has it run when wordpress is initializing the page
add_action('init', 'awesome_menus');
function awesome_menus(){
	register_nav_menus( array(
			//'code_name' => 'Human Readable'
			'main_nav'  => 'Main Navigation Area',
			'utilities' => 'Utilities and Social Icons',
		) );
}

/**
 * Add Widget Areas (Dynamic Sidebars)
 */
add_action('widgets_init', 'awesome_widget_areas');
function awesome_widget_areas(){
	register_sidebar( array(
		'name'			=> 'Blog Sidebar',
		'id'  			=> 'blog_sidebar',
		'description'   => 'Appears alongside all blog and archive pages',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'			=> 'Home Area',
		'id'  			=> 'home_area',
		'description'   => 'Appears in the middle of the home page content',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'			=> 'Page Sidebar',
		'id'  			=> 'page_sidebar',
		'description'   => 'Appears alongside all pages',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'			=> 'Footer Area',
		'id'  			=> 'footer_area',
		'description'   => 'Appears at the bottom of everything',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}







//don't close PHP!