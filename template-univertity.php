<?php
/*
Template Name: Template University
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<section class="block__central">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php
							$args2 = array(
								'post_type' 		=> 'university',			//Costum type Proyectos			
								'order'				=> 'ASC',			// List in ascending order
								'orderby'      		=> 'id',			// List them in their menu order
								'posts_per_page'	=>   -1, 			// Show the last one
							);

							$universityQuery = new WP_Query($args2);
						?>


						<?php /* Start the Loop */ ?>
						<?php while ($universityQuery->have_posts()) : $universityQuery->the_post(); ?><!--

						--><div class="block__link--university clearfix">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div><!--

						--><?php endwhile; ?>

					</article><!-- #post-## -->


				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
