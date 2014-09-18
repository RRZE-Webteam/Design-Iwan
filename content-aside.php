<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'iwan' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'iwan' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div class="entry-meta">
			<?php iwan_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'iwan' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

		<?php if ( is_single() ) : ?>

			<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>

		<?php endif; // is_single() ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
