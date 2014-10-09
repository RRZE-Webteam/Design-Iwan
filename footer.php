<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php
	wp_nav_menu(
			array(
				'theme_location' => 'techmenu',
				'container' => 'nav',
				'container_class' => 'navigation techmenu',
				'container_id' => 'tech-navigation',
				'menu_id' => 'menu-techmenu',
				'menu_class' => 'tech-menu container',
				'fallback_cb' => 'iwan_tecmenu_fallback',
				'items_wrap' => '<h2 class="screen-reader-text"><a name="hilfemarke" id="hilfemarke">' . __('Technical Menu', 'iwan') . '</a></h2><ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 1
			)
	);
	?>
	<?php get_sidebar('main'); ?>

	<div class="site-info"></div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>