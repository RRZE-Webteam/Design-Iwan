<?php
/**
 * Implement a custom header for Iwan
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Iwan
 * @since Iwan 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses iwan_header_style() to style front-end.
 * @uses iwan_admin_header_style() to style wp-admin form.
 * @uses iwan_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 *
 * @since Iwan 1.0
 */
function iwan_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '003366',
		'default-image'          => '%s/images/headers/fau-blogs.png',

		// Set height and width, with a maximum value for the width.
		'height'                 => 100,
		'width'                  => 600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'iwan_header_style',
		'admin-head-callback'    => 'iwan_admin_header_style',
		'admin-preview-callback' => 'iwan_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'fau-blogs' => array(
			'url'           => '%s/images/headers/fau-blogs.png',
			'thumbnail_url' => '%s/images/headers/fau-blogs-thumbnail.png',
			'description'   => _x( 'FAU Blogsystem', 'header image description', 'iwan' )
		),
		'fau-logo' => array(
			'url'           => '%s/images/headers/logo-fau.png',
			'thumbnail_url' => '%s/images/headers/logo-fau-thumbnail.png',
			'description'   => _x( 'Logo FAU', 'header image description', 'fauish' )
		),
		'fau-aktuell' => array(
			'url'           => '%s/images/headers/fau-aktuell.png',
			'thumbnail_url' => '%s/images/headers/fau-aktuell-thumbnail.png',
			'description'   => _x( 'FAU Aktuell', 'header image description', 'iwan' )
		),
	) );
}
add_action( 'after_setup_theme', 'iwan_custom_header_setup', 11 );

/**
 * Load our special font CSS files.
 *
 * @since Iwan 1.0
 */
function iwan_custom_header_fonts() {
	// Add Genericons font.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.03' );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'iwan_custom_header_fonts' );

/**
 * Style the header text displayed on the blog.
 *
 * get_header_textcolor() options: Hide text (returns 'blank'), or any hex value.
 *
 * @since Iwan 1.0
 */
function iwan_header_style() {
	$header_image = get_header_image();
	$text_color   = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="iwan-header-css">
	<?php
		if ( ! empty( $header_image ) ) :
	?>
		.site-title,
		.site-description {
			clear: none;
		}
		@media (max-width: 767px) {
			.site-header {
				background-size: 768px auto;
			}
		}
		@media (max-width: 359px) {
			.site-header {
				background-size: 360px auto;
			}
		}
	<?php
		endif;

		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
			if ( empty( $header_image ) ) :
	?>
		.site-header .home-link {
			min-height: 0;
		}
	<?php
			endif;

		// If the user has set a custom color for the text, use that.
		elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
	?>
		.site-title,
		.site-description {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}

/**
 * Style the header image displayed on the Appearance > Header admin panel.
 *
 * @since Iwan 1.0
 */
function iwan_admin_header_style() {
	$header_image = get_header_image();
?>
	<style type="text/css" id="iwan-admin-header-css">
	.appearance_page_custom-header #headimg {
		border: none;
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		padding: 20px;
		background: #ffffff;
	}
	#headimg .home-link {
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		margin: 0;
		max-width: 1040px;
		<?php
		if ( ! empty( $header_image ) || display_header_text() ) {
			echo 'min-height: 100px;';
		} ?>
		width: 100%;
	}
	<?php if ( ! display_header_text() ) : ?>
	#headimg h1,
	#headimg h2 {
		position: absolute !important;
		clip: rect(1px 1px 1px 1px); /* IE7 */
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php endif; ?>
	#headimg h1 {
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size: 2em;
		font-weight: bold;
		line-height: 1;
		color: #003366 !important;
		margin: 0;
		padding: 10px 0 10px;
	}
	#headimg h1 a {
		text-decoration: none;
		color: #003366;
	}
	#headimg h1 a:hover {
		text-decoration: underline;
	}
	#headimg h2 {
		font: italic 300 24px "Helvetica Neue",Helvetica,sans-serif;
		color: #003366;
		text-shadow: none;
		clear: none;
		margin: 0;
		padding: 0;
	}
	#headimg img {
		float: left;
		margin-right: 20px;
	}
	.default-header img {
		max-width: 230px;
		width: auto;
	}
	</style>
<?php
}

/**
 * Output markup to be displayed on the Appearance > Header admin panel.
 *
 * This callback overrides the default markup displayed there.
 *
 * @since Iwan 1.0
 */
function iwan_admin_header_image() {
	?>
	<div id="headimg">
		<?php $style = ' style="color:#' . get_header_textcolor() . ';"'; ?>
		<div class="home-link">
			<img class="header-logo" src="<?php header_image(); ?>">
			<h1 class="displaying-header-text"><a id="name" onclick="return false;" href="#"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="desc" class="displaying-header-text"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div>
<?php }
