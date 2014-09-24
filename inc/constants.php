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
	'default_comment_notes_before' => '<p class="comment-notes">' . __('Deine E-Mail-Adresse wird nicht ver&ouml;ffentlicht. Erforderliche Felder sind markiert <span class="required">*</span>', 'iwan') . '</p>',
	'disclaimer_post' => '',
	'login_errors' => 0,
	'src-breadcrumb-image' => get_template_directory_uri() . '/images/breadcrumbarrow.gif',
	'src-teaser-thumbnail_default' => '',
	'category-teaser' => 1,
	'num-article-startpage-fullwidth' => 1,
	'num-article-startpage-halfwidth' => 4,
	'teaser-thumbnail_width' => 120,
	'teaser-thumbnail_height' => 120,
	'teaser-thumbnail_crop' => 0,
	'src-teaser-thumbnail_default' => get_template_directory_uri() . '/images/default-teaserthumb.gif',
	'teaser-thumbnail_fallback' => 1,
	'teaser-title-maxlength' => 50,
	'teaser-subtitle' => __('Topthema', 'iwan'),
	'teaser-title-words' => 7,
	'teaser_maxlength' => 500,
	'teaser-titleup' => 1, /* Titles up */
	'teaser-datebox' => 0,
	/*
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */
	'teaser-floating' => 0,
	'teaser-dateline' => 0, /* 1 = show Date on line up of the text if no datebox */
	'teaser-maxlength-halfwidth' => 200,
	'teaser-titleup-halfwidth' => 1, /* Titles up */
	'teaser-datebox-halfwidth' => 1,
	'teaser-floating-halfwidth' => 1,
	'teaser-dateline-halfwidth' => 0, /* 1 = show Date on line up of the text if no datebox */
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
		'name' => __('Follow us on Facebook','iwan'),
		'content' => 'https://de-de.facebook.com/Uni.Erlangen.Nuernberg',
		'active' => 1,
	),
	'facebook_share' => array(
		'name' => __('Share on Facebook','iwan'),
		'content' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_bloginfo('url'),
		'active' => 1,
	),
	'twitter_follow' => array(
		'name' => __('Follow us on Twitter','iwan'),
		'content' => 'https://twitter.com/UniFAU',
		'active' => 1,
	),
	'twitter_share' => array(
		'name' => __('Share on Twitter','iwan'),
		'content' => 'https://twitter.com/intent/tweet?&via=uniFAU&url=' . get_bloginfo('url'),
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
	'feed' => array(
		'name' => 'RSS Feed',
		'content' => get_bloginfo('rss2_url'),
		'active' => 1,
	),
);

/*
 * Linkliste fuer Footer und Widgets
 */
$default_footerlink_liste = array(
	__('Fakultaeten', 'iwan') => array(
		'title' => __('Friedrich-Alexander-Universit&auml;t Erlangen-N&uuml;rnberg', 'iwan'),
		'url' => 'http://www.fau.de',
		'sublist' => array(
			__('Philosophische Fakult&auml;t und Fachbereich Theologie', 'iwan') => 'http://www.phil.faude/',
			__('Rechts- und Wirtschaftswissenschaftliche Fakult&auml;t', 'iwan') => 'http://www.rw.fau.de/',
			__('Medizinische Fakult&auml;t', 'iwan') => 'http://www.med.fau.de/',
			__('Naturwissenschaftliche Fakult&auml;t', 'iwan') => 'http://www.natfak.fau.de/',
			__('Technische Fakult&auml;t', 'iwan') => 'http://www.techfak.fau.de/',
		)
	),
	__('RRZE', 'iwan') => array(
		'title' => __('Regioanles Rechenzentrum Erlangen', 'iwan'),
		'url' => 'http://www.rrze.fau.de',
		'sublist' => array(
			__('Service-Theke', 'iwan') => 'http://www.rrze.fau.de/hilfe/service-theke',
			__('Informationszentrum Innenstadt', 'iwan') => 'http://www.izi.rrze.fau.de/',
			__('Informationszentrum N&uuml;rnberg', 'iwan') => 'http://www.zzn.rrze.fau.de/',
			__('Informationszentrum Halbmondstrasse', 'iwan') => 'http://www.izh.rrze.fau.de/',
			__('Blogdienst', 'iwan') => 'http://blogs.fau.de/',
			__('Videoportal', 'iwan') => 'http://video.fau.de/',
			__('IDM', 'iwan') => 'https://www.idm.fau.de/',
			__('Aktuelle Meldungen', 'iwan') => 'http://blogs.fau.de/rrze/',
		)
	),
);



/*
 * Definition welche Konstanten als Optionen im Backend geaendert werden koennen
 */

$setoptions = array(
	'iwan_theme_options' => array(
		'design' => array(
			'tabtitle' => __('Design', 'iwan'),
			'fields' => array(
				'text-startseite' => array(
					'type' => 'text',
					'title' => __('Home Page Name', 'iwan'),
					'label' => __('Home page name for breadcrumb navigation', 'iwan'),
					'default' => $defaultoptions['text-startseite'],
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
		'startseite' => array(
			'tabtitle' => __('Home Page', 'iwan'),
			'fields' => array(
				'teaser-title-maxlength' => array(
					'type' => 'number',
					'title' => __('Textl&auml;nge', 'iwan'),
					'label' => __('Maximale Textl&auml;nge des Titels im Teaser.', 'iwan'),
					'default' => $defaultoptions['teaser-title-maxlength'],
				),
				'teaser-title-words' => array(
					'type' => 'number',
					'title' => __('Wortzahl', 'iwan'),
					'label' => __('Zahl der Worte im Teaser; Die maximale Textl&auml;nge begrenzt diesen Wert jedoch.', 'iwan'),
					'default' => $defaultoptions['teaser-title-words'],
				),
				'auszuege' => array(
					'type' => 'section',
					'title' => __('Gestaltung Textausz&uuml;ge', 'iwan'),
				),
				'num-article-startpage-fullwidth' => array(
					'type' => 'number',
					'title' => __('Beitr&auml;ge &uuml;ber ganze Breite', 'iwan'),
					'label' => __('Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'iwan'),
					'default' => $defaultoptions['num-article-startpage-fullwidth'],
					'parent' => 'auszuege'
				),
				'num-article-startpage-halfwidth' => array(
					'type' => 'select',
					'title' => __('Beitr&auml;ge &uuml;ber halbe Breite', 'iwan'),
					'label' => __('Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'iwan'),
					'liste' => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8),
					'default' => $defaultoptions['num-article-startpage-halfwidth'],
					'parent' => 'auszuege'
				),
				'teaser_maxlength' => array(
					'type' => 'number',
					'title' => __('L&auml;nge des Teasertextes (Artikelauszug)', 'iwan'),
					'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge auf der Startseite.', 'iwan'),
					'default' => $defaultoptions['teaser_maxlength'],
					'parent' => 'auszuege'
				),
				'teaser-titleup' => array(
					'type' => 'bool',
					'title' => __('Titel oben', 'iwan'),
					'label' => __('Titel &uuml;ber Logo/Datumsbox und Text', 'iwan'),
					'default' => $defaultoptions['teaser-titleup'],
					'parent' => 'auszuege'
				),
				'teaser-datebox' => array(
					'type' => 'select',
					'title' => __('Symbolbild/Datumsbox', 'iwan'),
					'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels.', 'iwan'),
					'default' => $defaultoptions['teaser-datebox'],
					'liste' => array(
						1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "iwan"),
						2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "iwan"),
						3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "iwan"),
						4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "iwan"),
						5 => __("Nichts anzeigen", "iwan")),
					'parent' => 'auszuege'
				),
				'teaser-floating' => array(
					'type' => 'bool',
					'title' => __('Flie&szlig;ender Text', 'iwan'),
					'label' => __('Text umflie&szlig;t das Bild', 'iwan'),
					'default' => $defaultoptions['teaser-floating'],
					'parent' => 'auszuege'
				),
				'teaser-dateline' => array(
					'type' => 'bool',
					'title' => __('Datumszeile', 'iwan'),
					'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'iwan'),
					'default' => $defaultoptions['teaser-dateline'],
					'parent' => 'auszuege'
				),
				'teaser-maxlength-halfwidth' => array(
					'type' => 'number',
					'title' => __('L&auml;nge des Teasertextes', 'iwan'),
					'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'iwan'),
					'default' => $defaultoptions['teaser-maxlength-halfwidth'],
					'parent' => 'auszuege'
				),
				'teaser-titleup-halfwidth' => array(
					'type' => 'bool',
					'title' => __('Titel oben', 'iwan'),
					'label' => __('Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'iwan'),
					'default' => $defaultoptions['teaser-titleup-halfwidth'],
					'parent' => 'auszuege'
				),
				'teaser-datebox-halfwidth' => array(
					'type' => 'select',
					'title' => __('Symbolbild/Datumsbox', 'iwan'),
					'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'iwan'),
					'default' => $defaultoptions['teaser-datebox-halfwidth'],
					'liste' => array(
						1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "iwan"),
						2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "iwan"),
						3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "iwan"),
						4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "iwan"),
						5 => __("Nichts anzeigen", "iwan")),
					'parent' => 'auszuege'
				),
				'teaser-floating-halfwidth' => array(
					'type' => 'bool',
					'title' => __('Flie&szlig;ender Text', 'iwan'),
					'label' => __('Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'iwan'),
					'default' => $defaultoptions['teaser-floating-halfwidth'],
					'parent' => 'auszuege'
				),
				'teaser-dateline-halfwidth' => array(
					'type' => 'bool',
					'title' => __('Datumszeile', 'iwan'),
					'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'iwan'),
					'default' => $defaultoptions['teaser-dateline-halfwidth'],
					'parent' => 'auszuege'
				),
			),
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
