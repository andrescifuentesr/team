<?php
	$args2 = array(
		'post_type' 		=> 'page',			//Costum type Proyectos			
		'page_id'			=> '242',			// List in ascending order
	);

	$homeModalQuery = new WP_Query($args2);
?>


<?php /* Start the Loop */ ?>
<?php while ($homeModalQuery->have_posts()) : $homeModalQuery->the_post(); ?>

	<section id="block__central-<?php the_ID(); ?>" class="block__central-modal md-show md-effect" ?>

		<div class="block__central--home-modal">

			<button class="bt_modal__home-close">X</button>

			<img src="<?php bloginfo('template_directory'); ?>/img/logo-team-blue.svg"  class="logo__erasmus-modal" alt="Logo Team" />

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<div class="block__central--home--image">
				<?php the_post_thumbnail('full'); ?>
			</div>

		</div>
	
	</section>

	<div class="md-overlay"></div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>