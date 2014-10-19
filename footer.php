<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Team
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<div class="site-info__erasmus">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-erasmus.svg"  alt="Logo Erasmus Mundus" />
			</div><!--
				  
			--><div class="site-info__menu">
				<?php get_template_part( 'inc/menu', 'footer' ); ?>
			</div><!--

		--><div class="site-info__search">
				<?php get_search_form(); ?>
			</div>

		</div><!-- .site-info -->
		<p class="site-info__mention">Mentions Légales - Design : Thomas La Blanc / Antoine Marinot -  Développment : Andres Cifuentes</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
