<?php
/**
 * @package Team
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span class="entry-title--city"><?php the_field('university_city'); ?></span> - <span class="entry-title--country"><?php the_field('university_country'); ?></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="block__university--photo">

		<div class="block__university--logo">
			<?php the_post_thumbnail('full'); ?>
		</div><!--

	--><div class="block__university--campus">
			<?php
				$image_university_photo = get_field('university_photo');
				if( !empty($image_university_photo) ): ?>
					<img src="<?php echo $image_university_photo['url']; ?>" alt="<?php echo $image_university_photo['alt']; ?>" />
			<?php endif; ?>
		</div>

	</div>

</article><!-- #post-## -->
