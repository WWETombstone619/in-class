<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="path/to/css/reset.css" media="screen" />
	
	<?php wp_head(); //hook. used for pugins and the admin bar?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
 
</head>
 
<body class="home">
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<nav>
			<ul>
				<?php wp_list_pages( array(
					'title_li' => '',
					'depth'    => 1,
				) ); ?>
			</ul>
		</nav>
	
		<?php get_search_form(); ?>		
	</header>