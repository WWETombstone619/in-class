<aside id="sidebar"> 
		<section id="categories" class="widget">
			<h3 class="widget-title"> Categories </h3>
			<ul>
				<?php
				//show the top 10 most popular posts
				wp_list_categories( array(
					'title_li'   => '',
					'show_count' => true,
					'orderby'    => 'count',
					'order'      => 'DESC',
					'number'     => 10,
				) ); ?>                
			</ul>
		</section>
		<section id="archives" class="widget">
			<h3 class="widget-title"> Archives </h3>
			<ul>
				<?php wp_get_archives( array(
					'type' => 'yearly',
				) ); ?>
			</ul>
		</section>
		<section id="tags" class="widget">
			<h3 class="widget-title"> Tags </h3>
			<ul>
				<?php wp_list_categories( array(
					'taxonomy'   => 'post_tag',
					'title_li'   => '',
					'show_count' => true,
					'orderby'    => 'count',
					'order'      => 'DESC',
					'number'     => 10,
				) ); ?>
			</ul>
		</section>
		<section id="meta" class="widget">
			<h3 class="widget-title"> Meta </h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
			</ul>
		</section>
	</aside><!-- end #sidebar -->