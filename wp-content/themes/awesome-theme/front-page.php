<?php get_header(); //include header.php ?>

<main id="content">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

		<?php the_post_thumbnail( 'big-banner' ); //show the featured image ?>


			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>

			

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
					
		</article><!-- end post -->

		<?php endwhile; ?>
	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

	<?php awesome_show_products( 6 ); //defined in functions.php?>


</main><!-- end #content -->

<?php get_sidebar('home'); //include sidebar-home.php ?>
<?php get_footer(); //include footer.php ?>