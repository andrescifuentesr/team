<?php
/*
Template Name: Template Partners
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<div class="block__breadcrumb"><p id="breadcrumbs">','</p></div>');
			} ?>

			<section class="block__central">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php
							$args2 = array(
								'post_type' 		=> 'partner',			//Costum type Proyectos			
								'order'				=> 'ASC',			// List in ascending order
								'orderby'      		=> 'name',			// List them in their menu order
								'posts_per_page'	=>   -1, 			// Show the last one
							);

							$partnerQuery = new WP_Query($args2);
						?>


						<?php /* Start the Loop */ ?>
						<?php while ($partnerQuery->have_posts()) : $partnerQuery->the_post(); ?>

							<div class="block__partner clearfix">

								<div class="block__partner--image">
									<a href="<?php the_field('partner_country_link'); ?>" target="_blank">
										<?php the_post_thumbnail('full'); ?>
									</a>
								</div><!--


							--><div class="block__partner--texte">
									<p><?php the_title(); ?> - <span><?php the_field('partner_country'); ?></span></p>
									<a href="<?php the_field('partner_country_link'); ?>" target="_blank"><?php the_field('partner_country_link'); ?></a>
								</div>



							</div>

						<?php endwhile; ?>

					</article><!-- #post-## -->


				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
