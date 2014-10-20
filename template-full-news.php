<?php
/*
Template Name: Template News
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<div class="block__breadcrumb"><p id="breadcrumbs">','</p></div>');
			} ?>

			<section class="block__central block__central--news">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<header class="entry-header__global">
							<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						</header>

						<?php
							$args2 = array(
								'post_type' 		=> 'new',			//Costum type Proyectos			
								'order'				=> 'DESC',			// List in ascending order
								'orderby'      		=> 'id',			// List them in their menu order
								'posts_per_page'	=>   -1, 			// Show the last one
							);

							$partnerQuery = new WP_Query($args2);
						?>


						<?php /* Start the Loop */ ?>
						<?php while ($partnerQuery->have_posts()) : $partnerQuery->the_post(); ?>

							<header class="entry-header">
								<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
								<span class="entry-date"><?php the_time('j/m/Y'); ?></span>
							</header>
							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>

						<?php endwhile; ?>

					</article><!-- #post-## -->


				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
