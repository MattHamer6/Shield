<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );		
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		//wp_enqueue_style( 'FontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' );

		// Fonts
		wp_enqueue_style( 'Lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap' );
		wp_enqueue_style( 'Monsteraat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap' );

		// Third Party
		wp_enqueue_style( 'Slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
		wp_enqueue_style( 'FancyBox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );

		wp_enqueue_script( 'jquery' );
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), $js_version, true );
		
		// Third Party
		wp_enqueue_script( 'animeJs', get_template_directory_uri() . '/js/dist/anime.min.js', array(), $js_version, true );
		wp_enqueue_script( 'filter', get_template_directory_uri() . '/js/dist/mixitup.min.js', array(), $js_version, true );
		wp_enqueue_script( 'FontAwesome', 'https://kit.fontawesome.com/77327d2d13.js', '', '', true );
		wp_enqueue_script( 'Slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '', true );
		wp_enqueue_script( 'FancyBox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', '', '', true );


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
