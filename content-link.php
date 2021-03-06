<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php iwan_entry_date(); ?>
			<?php edit_post_link( __( 'Edit', 'iwan' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<h1 class="entry-title">
			<a href="<?php echo esc_url( iwan_get_link_url() ); ?>"><?php the_title(); ?></a>
		</h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'iwan' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'iwan' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
	<footer class="entry-meta">
		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
	<?php endif; // is_single() ?>
</article><!-- #post -->
