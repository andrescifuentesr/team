<section class="block__sidebar">

	<div class="block__apply">
		<?php printf( __( '<a href="%1$s" class="bt_apply">Apply Now</a>', 'team' ), esc_url( admin_url( 'post-new.php' ) ) ); ?>
	</div>

	<div class="block__news">
		<h1 class="entry-title--news"><?php _e( 'News', 'team' ); ?></h1>
		
		<article class="block--article__news">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<span class="entry-date"><?php the_time('j/m/Y'); ?></span>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	</div>

</section>