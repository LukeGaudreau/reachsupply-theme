<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package reachsupply
 */
?>

</div><!-- #content -->
</div><!-- #content-wrapper -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="footer-wrapper" class="container">
		<?php get_sidebar(); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'reachsupply' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'reachsupply' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'reachsupply' ), 'reachsupply', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->

		<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>' ) ); ?>
	</div><!-- #footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
