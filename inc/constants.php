<?php

/**
 * Iwan  Constants
 *
 * */
$defaultoptions = array(
	'js-version' => '1.1',
	'default-color' => 'e6e6e6',
	'thumbnail-width' => 624,
	'thumbnail-height' => 9999,
	'content-width' => 625,
	'bannerlink-width' => 180,
	/* Max width for Logos and Images in Sidebar */
	'bannerlink-height' => 360,
	/* Max height for Logos and Images in Sidebar */
	'src_socialmediabuttons' => '/css/basemod_socialmediaicons.css',
	'aktiv-socialmediabuttons' => 1,
	'aktiv-post-sm-buttons' => 1,
	'aktiv-facebook-share' => 1,
	'aktiv-twitter-share' => 1,
	'aktiv-autoren' => 1,
	'aktiv-commentreplylink' => 0,
	'default_comment_notes_before' => '<p class="comment-notes">' . __('Your email address will not be published. Required fields are marked red.', 'iwan') . '<span class="required">*</span>' . '</p>',
	'disclaimer_post' => '',
	'login_errors' => 0,
	'src-breadcrumb-image' => get_template_directory_uri() . '/images/breadcrumbarrow.gif',
	'src-teaser-thumbnail_default' => '',
	'category-teaser' => 1,
	'teaser-thumbnail_width' => 300,
	'teaser-thumbnail_height' => 300,
	'teaser-thumbnail_crop' => 0,
	'src-teaser-thumbnail_default' => get_template_directory_uri() . '/images/default-teaserthumb.gif',
	'teaser-thumbnail_fallback' => 1,
	'teaser_maxlength' => 500,
	'teaser-image' => 0,
	/*
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */
	'text-startseite' => __('Home', 'iwan'),
	'default_text_title_home_backlink' => __('Back to Home Page', 'iwan'),
	'default_footerlink_key' => 'Fakultaeten',
	'aktiv-buttons' => 1,
	'aktiv-anmeldebutton' => 1,
	'url-anmeldebutton' => '#',
	'title-anmeldebutton' => 'Button 1',
	'color-anmeldebutton' => 'blau',
	'aktiv-cfpbutton' => 1,
	'url-cfpbutton' => '#',
	'title-cfpbutton' => 'Button 2',
	'color-cfpbutton' => 'green',
	'yt-alternativeembed' => 1,
	/* YouTube Videos ueber eigenen Embedcode gestalten und an youtbe-nocookie lenken */
	'yt-norel' => 1,
	/* Keine weiteren Videos vorschlagen */
	'yt-content-width' => 665,
	'yt-content-height' => 500,
);


/*
 * Liste Social Media
 */
$default_socialmedia_post_liste = array(
	'facebook_share' => array(
		'name' => 'Facebook',
		'link' => 'https://www.facebook.com/sharer/sharer.php?u=',
		'link_title' => __('Share on Facebook', 'iwan'),
	),
	'twitter_share' => array(
		'name' => 'Twitter',
		'link' => 'https://twitter.com/intent/tweet?&url=',
		'link_title' => __('Share on Twitter', 'iwan'),
	),
);

/*
 * Liste Social Media
 */
$default_socialmedia_liste = array(
	'feed' => array(
		'name' => 'RSS Feed',
		'content' => get_bloginfo('rss2_url'),
		'active' => 1,
	),
	'delicious' => array(
		'name' => 'Delicious',
		'content' => '',
		'active' => 0,
	),
	'diaspora' => array(
		'name' => 'Diaspora',
		'content' => '',
		'active' => 0,
	),
	'facebook_follow' => array(
		'name' => 'Facebook',
		'content' => 'https://de-de.facebook.com/Uni.Erlangen.Nuernberg',
		'active' => 1,
	),
	'twitter_follow' => array(
		'name' => 'Twitter',
		'content' => 'https://twitter.com/UniFAU',
		'active' => 1,
	),
	'gplus' => array(
		'name' => 'Google Plus',
		'content' =>  '',
		'active' => 1,
	),
	'flattr' => array(
		'name' => 'Flattr',
		'content' => '',
		'active' => 0,
	),
	'flickr' => array(
		'name' => 'Flickr',
		'content' => '',
		'active' => 0,
	),
	'identica' => array(
		'name' => 'Identica',
		'content' => '',
		'active' => 0,
	),
	'itunes' => array(
		'name' => 'iTunes',
		'content' => '',
		'active' => 0,
	),
	'skype' => array(
		'name' => 'Skype',
		'content' => '',
		'active' => 0,
	),
	'youtube' => array(
		'name' => 'YouTube',
		'content' => '',
		'active' => 1,
	),
	'xing' => array(
		'name' => 'Xing',
		'content' => '',
		'active' => 0,
	),
	'tumblr' => array(
		'name' => 'Tumblr',
		'content' => '',
		'active' => 1,
	),
	'github' => array(
		'name' => 'GitHub',
		'content' => '',
		'active' => 0,
	),
	'appnet' => array(
		'name' => 'App.Net',
		'content' => '',
		'active' => 0,
	),
);


/*
 * Definition welche Konstanten als Optionen im Backend geaendert werden koennen
 */

$setoptions = array(
	'iwan_theme_options' => array(
		'design' => array(
			'tabtitle' => __('Content Options', 'iwan'),
			'fields' => array(
				'text-startseite' => array(
					'type' => 'text',
					'title' => __('Home Page Name', 'iwan'),
					'label' => __('Home page name for breadcrumb navigation', 'iwan'),
					'default' => $defaultoptions['text-startseite'],
				),
				'teaser' => array(
					'type' => 'section',
					'title' => __('Teaser', 'iwan'),
				),
				'teaser_maxlength' => array(
					'type' => 'number',
					'title' => __('Teaser length', 'iwan'),
					'label' => __('Maximum length for teasers on home page.', 'iwan'),
					'default' => $defaultoptions['teaser_maxlength'],
					'parent' => 'teaser'
				),
				'teaser-image' => array(
					'type' => 'select',
					'title' => __('Teaser image', 'iwan'),
					'label' => __('Show teaser image if availible and depending on post content.', 'iwan'),
					'default' => $defaultoptions['teaser-image'],
					'liste' => array(
						1 => __("Featured image > first image > first video > default image", "iwan"),
						2 => __("First image > featured image > first video > default image", "iwan"),
						3 => __("First video > featured image > first image > default image", "iwan"),
						4 => __("First video > first image > featured image > default image", "iwan"),
						5 => __("No teaser image", "iwan")),
					'parent' => 'teaser'
				),
				'aktiv-autoren' => array(
					'type' => 'bool',
					'title' => __('Show Authors', 'iwan'),
					'label' => __('Show and link authors on post single view.', 'iwan'),
					'default' => $defaultoptions['aktiv-autoren'],
				),
				'buttons' => array(
					'type' => 'section',
					'title' => __('Buttons', 'iwan'),
				),
				'aktiv-buttons' => array(
					'type' => 'bool',
					'title' => __('Show buttons', 'iwan'),
					'label' => __('Show buttons on top of the sidebar', 'iwan'),
					'default' => $defaultoptions['aktiv-buttons'],
					'parent' => 'buttons'
				),
				'aktiv-anmeldebutton' => array(
					'type' => 'bool',
					'title' => __('First button', 'iwan'),
					'label' => __('Show', 'iwan'),
					'default' => $defaultoptions['aktiv-anmeldebutton'],
					'parent' => 'buttons'
				),
				'url-anmeldebutton' => array(
					'type' => 'url',
					'title' => __('URL', 'iwan'),
					'label' => __('Link', 'iwan'),
					'default' => $defaultoptions['url-anmeldebutton'],
					'parent' => 'buttons'
				),
				'title-anmeldebutton' => array(
					'type' => 'text',
					'title' => __('Link title', 'iwan'),
					'label' => __('Button Text', 'iwan'),
					'default' => $defaultoptions['title-anmeldebutton'],
					'parent' => 'buttons'
				),
				'color-anmeldebutton' => array(
					'type' => 'select',
					'title' => __('Color', 'iwan'),
					'label' => __('Button background color', 'iwan'),
					'default' => $defaultoptions['color-anmeldebutton'],
					'liste' => array(
						'grau' => __("Grey", "iwan"),
						'gelb' => __("Yellow", "iwan"),
						'gruen' => __("Green", "iwan"),
						'blau' => __("Blue", "iwan"),
					),
					'parent' => 'buttons'
				),
				'aktiv-cfpbutton' => array(
					'type' => 'bool',
					'title' => __('Second button', 'iwan'),
					'label' => __('Show', 'iwan'),
					'default' => $defaultoptions['aktiv-cfpbutton'],
					'parent' => 'buttons'
				),
				'url-cfpbutton' => array(
					'type' => 'url',
					'title' => __('URL', 'iwan'),
					'label' => __('Link', 'iwan'),
					'default' => $defaultoptions['url-cfpbutton'],
					'parent' => 'buttons'
				),
				'title-cfpbutton' => array(
					'type' => 'text',
					'title' => __('Link title', 'iwan'),
					'label' => __('Button Text', 'iwan'),
					'default' => $defaultoptions['title-cfpbutton'],
					'parent' => 'buttons'
				),
				'color-cfpbutton' => array(
					'type' => 'select',
					'title' => __('Color', 'iwan'),
					'label' => __('Button background color', 'iwan'),
					'default' => $defaultoptions['color-cfpbutton'],
					'liste' => array(
						'grau' => __("Grey", "iwan"),
						'gelb' => __("Yellow", "iwan"),
						'gruen' => __("Green", "iwan"),
						'blau' => __("Blue", "iwan"),
					),
					'parent' => 'buttons'
				),
			)
		),
		'socialmedia' => array(
			'tabtitle' => __('Social Media', 'iwan'),
			'fields' => array(
				'post-icons' => array(
					'type' => 'section',
					'title' => __('Share Icons in Post Header', 'iwan'),
				),
				'aktiv-post-sm-buttons' => array(
					'type' => 'bool',
					'title' => __('Show', 'iwan'),
					'label' => __('Show social media share buttons in the header of each post', 'iwan'),
					'default' => $defaultoptions['aktiv-post-sm-buttons'],
					'parent' => 'post-icons',
				),
				'aktiv-facebook-share' => array(
					'type' => 'bool',
					'title' => __('Facebook', 'iwan'),
					'label' => __('Show "Share on Facebook" icon.', 'iwan'),
					'link' => 'https://www.facebook.com/sharer/sharer.php?u=',
					'link_title' => __('Share on Facebook', 'iwan'),
					'default' => $defaultoptions['aktiv-facebook-share'],
					'parent' => 'post-icons',
				),
				'aktiv-twitter-share' => array(
					'type' => 'bool',
					'title' => __('Twitter', 'iwan'),
					'label' => __('Show "Share on Twitter" icon.', 'iwan'),
					'link' => 'https://twitter.com/intent/tweet?url=',
					'link_title' => __('Share on Twitter', 'iwan'),
					'default' => $defaultoptions['aktiv-twitter-share'],
					'parent' => 'post-icons',
				),
				'via-twitter' => array(
					'type' => 'text',
					'title' => __('Twitter via (optional)', 'iwan'),
					'label' => __('Your Twitter user name. Appears appended to Tweet text as via @username. The Twitter account may appear in a list of recommended accounts to follow.', 'iwan'),
					'parent' => 'post-icons',
				),
				'site-icons' => array(
					'type' => 'section',
					'title' => __('Follow Icons in Sidebar', 'iwan'),
				),
				'aktiv-socialmediabuttons' => array(
					'type' => 'bool',
					'title' => __('Show', 'iwan'),
					'label' => __('Show social media link icons on top of the sidebar', 'iwan'),
					'default' => $defaultoptions['aktiv-socialmediabuttons'],
					'parent' => 'site-icons',
				),
				'sm-list' => array(
					'type' => 'urlchecklist',
					'title' => __('Links', 'iwan'),
					'liste' => $default_socialmedia_liste,
					'parent' => 'post-icons',
				),
			)
		),
	)
);
?>
