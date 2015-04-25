<?php
/**
 * @package reachsupply
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
        <?php the_post_thumbnail(); ?>
        </div><!-- .entry-thumbnail -->
    <?php endif; ?>
	<div class="entry-content">
        <header class="entry-header">
            <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

            <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php reachsupply_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div><!-- .entry-excerpt -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'reachsupply' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php reachsupply_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
