<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Team
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- <img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" /> -->

				<?php get_template_part('inc/inline', 'carte.svg'); ?>
				
				<section class="block__central">

					<header class="entry-header">
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					
				</section>

				<?php get_template_part( 'inc/template', 'news' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
