<?php
/**
 * heidi Theme Customizer
 *
 * @package heidi
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function heidi_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
/**
* Add custom color options.
*
*/

	// Navigation Links
	$wp_customize->add_setting( 'navigation_links', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_links', array(
			'label' => __( 'Navigation Links', 'heidi' ),
			'section' => 'colors',
			'settings' => 'navigation_links',
	) ) );
	
	// Navigation Links - Hover
	$wp_customize->add_setting( 'navigation_hover', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_hover', array(
			'label' => __( 'Navigation Links - Hover', 'heidi' ),
			'section' => 'colors',
			'settings' => 'navigation_hover',
	) ) );
	
	// Main Color
	$wp_customize->add_setting( 'main_color', array(
			'default' => '#6ac5a2',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
			'label' => __( 'Main Color', 'heidi' ),
			'section' => 'colors',
			'settings' => 'main_color',
	) ) );
	
	// Main Accent
	$wp_customize->add_setting( 'main_accent', array(
			'default' => '#4e9f80',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_accent', array(
			'label' => __( 'Main Accent', 'heidi' ),
			'section' => 'colors',
			'settings' => 'main_accent',
	) ) );
	
	// Main Text
	$wp_customize->add_setting( 'main_text', array(
			'default' => '#404040',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_text', array(
			'label' => __( 'Main Text', 'heidi' ),
			'section' => 'colors',
			'settings' => 'main_text',
	) ) );
	
	// Posts Background
	$wp_customize->add_setting( 'posts_background', array(
			'default' => '#e9f0e9',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_background', array(
			'label' => __( 'Posts Background', 'heidi' ),
			'section' => 'colors',
			'settings' => 'posts_background',
	) ) );
	
	// Posts Accent
	$wp_customize->add_setting( 'posts_accent', array(
			'default' => '#f0f7f0',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_accent', array(
			'label' => __( 'Posts Accent', 'heidi' ),
			'section' => 'colors',
			'settings' => 'posts_accent',
	) ) );
	
	// Entry Footer Text
	$wp_customize->add_setting( 'entry_footer', array(
			'default' => '#404040',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'entry_footer', array(
			'label' => __( 'Entry Footer Text', 'heidi' ),
			'section' => 'colors',
			'settings' => 'entry_footer',
	) ) );
	
	// Posts Border
	$wp_customize->add_setting( 'posts_border', array(
			'default' => '#c9cdc9',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_border', array(
			'label' => __( 'Posts Border', 'heidi' ),
			'section' => 'colors',
			'settings' => 'posts_border',
	) ) );
	
	// Sticky Posts
	$wp_customize->add_setting( 'sticky_posts', array(
			'default' => '#bdddcf',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_posts', array(
			'label' => __( 'Sticky Posts', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sticky_posts',
	) ) );
	
	// Sticky Accent
	$wp_customize->add_setting( 'sticky_accent', array(
			'default' => '#d0e7dd',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_accent', array(
			'label' => __( 'Sticky Accent', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sticky_accent',
	) ) );
	
	// Sidebar Color
	$wp_customize->add_setting( 'sidebar_color', array(
			'default' => '#b4604e',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_color', array(
			'label' => __( 'Sidebar Color', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sidebar_color',
	) ) );
	
	// Sidebar Text
	$wp_customize->add_setting( 'sidebar_text', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_text', array(
			'label' => __( 'Sidebar Text', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sidebar_text',
	) ) );
	
	// Sidebar Links
	$wp_customize->add_setting( 'sidebar_links', array(
			'default' => '#f2bfb5',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_links', array(
			'label' => __( 'Sidebar Links', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sidebar_links',
	) ) );
	
	// Sidebar Links - Hover
	$wp_customize->add_setting( 'sidebar_hover', array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_hover', array(
			'label' => __( 'Sidebar Links - Hover', 'heidi' ),
			'section' => 'colors',
			'settings' => 'sidebar_hover',
	) ) );
	
	// Calendar Main Color
	$wp_customize->add_setting( 'calendar_color', array(
			'default' => '#bf6956',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'calendar_color', array(
			'label' => __( 'Calendar Main Color', 'heidi' ),
			'section' => 'colors',
			'settings' => 'calendar_color',
	) ) );
	
	// Calendar Top Row
	$wp_customize->add_setting( 'calendar_top_row', array(
			'default' => '#9d4d3c',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'calendar_top_row', array(
			'label' => __( 'Calendar Top Row', 'heidi' ),
			'section' => 'colors',
			'settings' => 'calendar_top_row',
	) ) );
	
	// Calendar Border
	$wp_customize->add_setting( 'calendar_border', array(
			'default' => '#c57768',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'calendar_border', array(
			'label' => __( 'Calendar Border', 'heidi' ),
			'section' => 'colors',
			'settings' => 'calendar_border',
	) ) );
	
	// Footer Text
	$wp_customize->add_setting( 'footer_text', array(
			'default' => '#111111',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
			'label' => __( 'Footer Text', 'heidi' ),
			'section' => 'colors',
			'settings' => 'footer_text',
	) ) );
}
add_action( 'customize_register', 'heidi_customize_register' );

function heidi_customizer_head_styles() {
	
	?>
	<style type="text/css">
		
		<?php 
		// Navigation Links
	
		$navigation_links = get_theme_mod( 'navigation_links' );
		if ( ! empty( $navigation_links ) && '#ffffff' != $navigation_links ) :
		?>
		
		/* Navigation Links */
		
		.main-navigation a {
			color: <?php echo esc_html( $navigation_links ); ?>;
			border-bottom: 2px solid <?php echo esc_html( $navigation_links ); ?>;
		}
		
		@media screen and (min-width: 37.5em) {
			.main-navigation a {
				border-bottom: none;
			}
		}
		
		<?php endif;
	
		// Navigation Links - Hover
	
		$navigation_hover = get_theme_mod( 'navigation_hover' );
		if ( ! empty( $navigation_hover ) && '#333333' != $navigation_hover ) :
		?>
		
		/* Navigation Links - Hover */
		
		.main-navigation a:hover, .main-navigation a:focus {
			color: <?php echo esc_html( $navigation_hover ); ?>;
		}
		
		.site-footer a:hover, .site-footer a:focus {
			color: <?php echo esc_html( $navigation_hover ); ?>;
		}
		
		<?php endif;
	
		// Main Color
	
		$main_color = get_theme_mod( 'main_color' );
		if ( ! empty( $main_color ) && '#6ac5a2' != $main_color ) :
		?>
		
		/* Main Color */
		
		.content-area a, .content-area a:visited {
			color: <?php echo esc_html( $main_color ); ?>;
		}
		
		.site-header, .main-navigation ul ul, .site-footer {
			background: <?php echo esc_html( $main_color ); ?>;
		}
		
		<?php endif;
		
		// Main Accent
		
		$main_accent = get_theme_mod( 'main_accent' );
		if ( ! empty( $main_accent ) && '#4e9f80' != $main_accent ) :
		?>
		
		/* Main Accent */
		
		.sticky .entry-header {
			border-top-color: <?php echo esc_html( $main_accent ); ?>;
		}
		
		.sticky .entry-footer {
			border-bottom-color: <?php echo esc_html( $main_accent ); ?>;
		}
		
		.sticky a {
			color: <?php echo esc_html( $main_accent ); ?>;
		}
		
		blockquote {
			border-left-color: <?php echo esc_html( $main_accent ); ?>;
		}
		
		.more-link {
			background: <?php echo esc_html( $main_accent ); ?>;
		}
		
		.hentry h1 a, .posted-on a, .more-link:hover, .more-link:focus {
			color: <?php echo esc_html( $main_accent ); ?>;
		}
		
		<?php endif;
		
		// Main Text
		
		$main_text = get_theme_mod( 'main_text' );
		if ( ! empty( $main_text ) && '#404040' != $main_text ) :
		?>
		
		/* Main Text */
		
		body, button, input, select, textarea {
			color: <?php echo esc_html( $main_text ); ?>;
		}
		
		<?php endif;
		
		// Posts Background
		
		$posts_background = get_theme_mod( 'posts_background' );
		if ( ! empty( $posts_background ) && '#e9f0e9' != $posts_background ) :
		?>
		
		/* Posts Background */
		
		.hentry, .comments-area {
			background: <?php echo esc_html( $posts_background ); ?>;
		}
		
		<?php endif;
	
		// Posts Accent
		
		$posts_accent = get_theme_mod( 'posts_accent' );
		if ( ! empty( $posts_accent ) && '#f0f7f0' != $posts_accent ) :
		?>
		
		/* Posts Accent */
		
		.entry-footer, .comment-body, .post-thumbnail-wrap, table, pre {
			background: <?php echo esc_html( $posts_accent ); ?>;
		}
		
		<?php endif;
		
		// Entry Footer Text
		
		$entry_footer = get_theme_mod( 'entry_footer' );
		if ( ! empty( $entry_footer ) && '#404040' != $entry_footer ) :
		?>
		
		/* Entry Footer Text */
		
		.entry-footer {
			color: <?php echo esc_html( $entry_footer ); ?>;
		}
		
		<?php endif;
		
		// Posts Border
		
		$posts_border = get_theme_mod( 'posts_border' );
		if ( ! empty( $posts_border ) && '#c9cdc9' != $posts_border ) :
		?>
		
		/* Posts Border */
		
		.hentry, .comments-area {
			border-color: <?php echo esc_html( $posts_border ); ?>;
		}
		
		<?php endif;
		
		// Sticky Posts
		
		$sticky_posts = get_theme_mod( 'sticky_posts' );
		if ( ! empty( $sticky_posts ) && '#bdddcf' != $sticky_posts ) :
		?>
		
		/* Sticky Posts */
		
		.sticky, blockquote {
			background: <?php echo esc_html( $sticky_posts ); ?>!important;
		}
		
		<?php endif;
		
		// Sticky Accent
		
		$sticky_accent = get_theme_mod( 'sticky_accent' );
		if ( ! empty( $sticky_accent ) && '#d0e7dd' != $sticky_accent ) :
		?>
		
		/* Sticky Accent */
		
		.sticky .entry-footer, .sticky blockquote, .site-main thead {
			background: <?php echo esc_html( $sticky_accent ); ?>!important;
		}
		
		<?php endif;
	
		// Sidebar Color
		
		$sidebar_color = get_theme_mod( 'sidebar_color' );
		if ( ! empty( $sidebar_color ) && '#b4604e' != $sidebar_color ) :
		?>
		
		/* Sidebar Color */
		
		.widget-area, .date_with_link:hover, .page-title {
			background: <?php echo esc_html( $sidebar_color ); ?>;
		}
		
		.widget_calendar td > a, .widget_calendar td > a:focus,
		.sticky a:hover, .sticky a:focus,
		a:hover, a:focus, a:active {
			color: <?php echo esc_html( $sidebar_color ); ?>;
		}
		
		@media all and (min-width: 1024px) {
			.widget-area {
				background: transparent;
			}
			
			.widget {
				background: <?php echo esc_html( $sidebar_color ); ?>;
			}
		}
		
		<?php endif;
	
		// Sidebar Text
		
		$sidebar_text = get_theme_mod( 'sidebar_text' );
		if ( ! empty( $sidebar_text ) && '#ffffff' != $sidebar_text ) :
		?>
		
		/* Sidebar Text */
		
		.widget-area {
			color: <?php echo esc_html( $sidebar_text ); ?>;
		}
		
		<?php endif;
		
		// Sidebar Links
		
		$sidebar_links = get_theme_mod( 'sidebar_links' );
		if ( ! empty( $sidebar_links ) && '#f2bfb5' != $sidebar_links ) :
		?>
		
		/* Sidebar Links */
		
		.widget-area a {
			color: <?php echo esc_html( $sidebar_links ); ?>;
		}
		
		<?php endif;
	
		// Sidebar Links - Hover
		
		$sidebar_hover = get_theme_mod( 'sidebar_hover' );
		if ( ! empty( $sidebar_hover ) && '#000000' != $sidebar_hover ) :
		?>
		
		/* Sidebar Links - Hover */
		
		.widget-area a:hover, .widget-area a:focus {
			color: <?php echo esc_html( $sidebar_hover ); ?>;
		}
		
		<?php endif;
		
		// Calendar Main Color
		
		$calendar_color = get_theme_mod( 'calendar_color' );
		if ( ! empty( $calendar_color ) && '#bf6956' != $calendar_color ) :
		?>
		
		/* Calendar Main Color */
		
		.widget-area table {
			background: <?php echo esc_html( $calendar_color ); ?>;
		}
		
		<?php endif;
	
		// Calendar Top Row
		
		$calendar_top_row = get_theme_mod( 'calendar_top_row' );
		if ( ! empty( $calendar_top_row ) && '#9d4d3c' != $calendar_top_row ) :
		?>
		
		/* Calendar Top Row */
		
		.widget-area thead {
			background: <?php echo esc_html( $calendar_top_row ); ?>!important;
		}
		
		<?php endif;
		
		// Calendar Border
		
		$calendar_border = get_theme_mod( 'calendar_border' );
		if ( ! empty( $calendar_border ) && '#c57768' != $calendar_border ) :
		?>
		
		/* Calendar Border */
		
		.widget-area td, .widget-area th {
			border-color: <?php echo esc_html( $calendar_border ); ?>;
		}
		
		<?php endif;
	
		// Footer Text
		
		$footer_text = get_theme_mod( 'footer_text' );
		if ( ! empty( $footer_text ) && '#111111' != $footer_text ) :
		?>
		
		/* Footer Text */
		
		.site-footer {
			color: <?php echo esc_html( $footer_text ); ?>;
		}
		
		<?php endif; ?>
	</style>
	<?php

}
add_action( 'wp_head', 'heidi_customizer_head_styles' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 * (only for site title and site description)
 */
function heidi_customize_preview_js() {
	wp_enqueue_script( 'heidi_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'heidi_customize_preview_js' );
