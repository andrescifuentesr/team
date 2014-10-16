<?php
/**
 * The template for displaying all single posts.
 *
 * @package Team
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<section class="block__central">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'new' ); ?>

				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>