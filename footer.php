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
			</div><!--
				  
			--><div class="site-info__menu">
				<?php get_template_part( 'inc/menu', 'footer' ); ?>
			</div><!--

		--><div class="site-info__search">
				<?php get_search_form(); ?>
			</div>

		</div><!-- .site-info -->
		<p class="site-info__mention">Mentions Légales - Design : <a href="http://inkcorp.fr/" target="_blank">Thomas Le Blanc</a> / 
			<a href="http://amarinotportfolio.fr/" target="_blank">Antoine Marinot</a> -  
			Développment : <a href="http://www.cuyabroweb.com/" target="_blank">Andres Cifuentes</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56162081-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
