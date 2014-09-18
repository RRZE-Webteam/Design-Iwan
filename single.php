<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area"><div class="breadcrumbs"> 				<?php if (function_exists('iwan_breadcrumbs')) iwan_breadcrumbs(); ?> 			</div>
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php iwan_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>