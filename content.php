<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */
global $options;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php iwan_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'iwan' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

		<?php if ( is_single() ) :  ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php if ( !is_single() ) :  ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php get_iwan_thumbnailcode(); ?></a>
			<?php else : ?>
				<?php get_iwan_thumbnailcode(); ?>
			<?php endif; // is_single() ?>
		</div>
	<?php endif; ?>

	<?php if ( is_single() ) : // Only display Full Content for Single View ?>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'iwan' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'iwan' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<?php else : ?>

	<div class="entry-summary">
		<?php get_iwan_custom_excerpt();?>
		<?php //the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'iwan' ) ); ?>
		<?php /*the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'iwan' ) ); */ ?>
	</div><!-- .entry-summary -->

	<?php endif; ?>

	<footer class="entry-meta">
		<?php if (($options['aktiv-autoren'] == 1) && is_single()) : ?>
			<div class="author"><?php _e('written by ','iwan'); the_author_posts_link(); ?></div>
		<?php endif; ?>
		<?php if ( comments_open() && is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'iwan' ) . '</span>', __( 'One comment so far', 'iwan' ), __( 'View all % comments', 'iwan' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

	</footer><!-- .entry-meta -->
</article><!-- #post -->
