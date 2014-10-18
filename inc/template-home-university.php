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
<?php while ($universityQuery->have_posts()) : $universityQuery->the_post(); ?>

	<section id="block__central-<?php the_ID(); ?>" class="block__central block__central--inactive" ?>

		<button data-modal-close="<?php the_ID(); ?>" class="bt_modal-close">X</button>

		<div class="block__central--home-text">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<span class="entry-title--city"><?php the_field('university_city'); ?></span> - <span class="entry-title--country"><?php the_field('university_country'); ?></span>
			</header>

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>

			<div class="block__university--logo">
				<?php the_post_thumbnail('full'); ?>
			</div>
		</div><!--

	--><div class="block__central--home-image">
			<div class="block__university--campus">
				<?php $image_university_photo = get_field('university_photo'); ?>
				<img src="<?php echo $image_university_photo['url']; ?>" alt="<?php echo $image_university_photo['alt']; ?>" />
			</div>
		</div>
	
	</section>

<?php endwhile; ?>