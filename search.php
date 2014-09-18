<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area"><div class="breadcrumbs"> 				<?php if (function_exists('iwan_breadcrumbs')) iwan_breadcrumbs(); ?> 			</div>
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'iwan' ), get_search_query() ); ?></h1>
			</header>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php iwan_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>