<?php

if ( ! function_exists( 'fse_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function fse_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'fse_theme_support' );

/* ----------------------------------------
Adding styles
-----------------------------------------*/

if ( ! function_exists( 'fse_styles' ) ) :
	function fse_styles() {
		wp_enqueue_style( "fse_style",  get_stylesheet_uri(), array(), wp_get_theme() -> get("Version") );
		wp_enqueue_style( "fse_style-blocks", get_template_directory_uri() . '/assets/css/blocks.css');
		wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', false );
	}
endif;
add_action( 'wp_enqueue_scripts', 'fse_styles' );


