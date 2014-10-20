<?php
/**
 * The template for displaying search results pages.
 *
 * @package Team
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<img src="<?php bloginfo('template_directory'); ?>/img/carte.svg"  alt="Logo Erasmus Mundus" class="block__carte" />

			<section class="block__central clearfix">
		
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'team' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php team_paging_nav(); ?>

				<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
