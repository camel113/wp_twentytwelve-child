<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<span id="abg-responsive-resize"><a href="#"></a></span>
			<span>&copy; <?php bloginfo( 'name' ); ?></span>
			<span class="abg-r-footerinfo"><a href="http://www.pme-web.ch" title="Conception site internet simple pour PME et particuliers">pme-web.ch</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>