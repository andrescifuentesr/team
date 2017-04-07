<section class="block__sidebar">

	<div class="block__news">
		
		<h1 class="entry-title--news">
			<a href="http://www.team-mundus.eu/news/"><?php _e( 'News', 'team' ); ?></a>
		</h1>

		<?php
			$args2 = array(
				'post_type' 		=> 'new',			//Costum type Proyectos			
				'order'				=> 'DESC',			// List in ascending order
				'orderby'      		=> 'id',			// List them in their menu order
				'posts_per_page'	=>   2, 			// Show the last one
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

	</div><!-- .block__news -->


	<div class="block__news">

		<div class="block__news-apply">
			<h2 class="entry-title--news">
				<?php _e( 'To apply', 'team' ); ?>
			</h2>

			<ul class="entry-list--news">
				<li>
					<a href="<?php echo esc_url( __( get_permalink(31), 'team' ) ); ?>"><?php _e( 'Academic offers – open application', 'team' ); ?>
					</a>
				</li>
				<li>
					<a target="_blank" href="<?php echo esc_url( __( 'http://www.team-mundus.eu/wp-content/uploads/2017/03/TEAM-application-instructions_C3-2ndcall.pdf', 'team' ) ); ?>"><?php _e( 'Application instructions', 'team' ); ?>
					</a>
				</li>
				<li>
					<a target="_blank" href="<?php echo esc_url( __( 'https://emecw.gis.lu.se/apply/?lot=TEAM', 'team' ) ); ?>"><?php _e( 'Online application portal', 'team' ); ?>
					</a>					
				</li>
			</ul>

		</div>

		<div class="block__news-learn">
			<h2 class="entry-title--news">
				<?php _e( 'Learn more about', 'team' ); ?>
			</h2>

			<ul class="entry-list--news">
				<li>
					<a href="<?php echo esc_url( __( get_permalink(17), 'team' ) ); ?>"><?php _e( 'Host universities and laboratories', 'team' ); ?>
					</a>					
				</li>
				<li>
					<a href="<?php echo esc_url( __( get_permalink(11), 'team' ) ); ?>"><?php _e( 'Profile of our Scholarship Holders', 'team' ); ?>
					</a>					
				</li>
			</ul>
		</div>

	</div><!-- .block__news -->


	<div class="block__apply block__apply--red">
		<?php printf( __( '<a href="%1$s" target="_blank">
			<div class="bt_apply">Apply Now </div><div class="bt_apply--deadline">Deadline: 15/05/2017</div></a>', 'team' ), "https://emecw.gis.lu.se/apply/?lot=TEAM" ); ?>
	</div>

</section>