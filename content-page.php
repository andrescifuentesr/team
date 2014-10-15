<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Team
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( get_field('application__intro') ) { ?>
		<div class="block-application__intro">
			<?php the_field('application__intro'); ?>
		</div>
	<?php } ?>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
