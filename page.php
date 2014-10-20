<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Team
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

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
