<?php 
/**
 * The template [art for the primary navigation menu.
 *
 * @package reachsupply
 */
?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'reachsupply' ); ?></a>

<header id="masthead" class="site-header" role="banner">
	<div class="mobile-logo">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'reachsupply' ); ?>
		</button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
