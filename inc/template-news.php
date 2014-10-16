<section class="block__sidebar">

	<div class="block__apply">
		<?php printf( __( '<a href="%1$s" class="bt_apply" target="_blank">Apply Now</a>', 'team' ), "https://emecw.gis.lu.se/apply/?lot=TEAM" ); ?>
	</div>

	<div class="block__news">
		
		<h1 class="entry-title--news">
			<a href="http://localhost:8888/team/news/"><?php _e( 'News', 'team' ); ?></a>
		</h1>

		<?php
			$args2 = array(
				'post_type' 		=> 'new',			//Costum type Proyectos			
				'order'				=> 'ASC',			// List in ascending order
				'orderby'      		=> 'name',			// List them in their menu order
				'posts_per_page'	=>   -1, 			// Show the last one
			);

			$newsQuery = new WP_Query($args2);
		?>

		<?php /* Start the Loop */ ?>
		<?php while ($newsQuery->have_posts()) : $newsQuery->the_post(); ?>	
		
			<article class="block--article__news">
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					<span class="entry-date"><?php the_time('j/m/Y'); ?></span>
				</header>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>

	</div>
</section>