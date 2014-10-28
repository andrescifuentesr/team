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

			<div class="block__breadcrumb">
				<p id="breadcrumbs">
					<span> <span>Community</span> > <span><a href="<?php echo get_permalink( 17 ); ?>">Consortium Partners</a></span> > <span><?php the_title(); ?></span> </span>
				</p>
			</div>

			<section class="block__central">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'university' ); ?>

				<?php endwhile; // end of the loop. ?>

			</section>

			<?php get_template_part( 'inc/template', 'news' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>