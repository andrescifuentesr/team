<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Team
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<section class="block__central clearfix">

				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'team' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'team' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
