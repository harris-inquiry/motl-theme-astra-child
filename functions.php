<?php
/**
 * motl-astra-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package motl-astra-child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MOTL_ASTRA_CHILD_VERSION', wp_get_theme()->get('Version') );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'motl-astra-child-theme-css',
                      get_stylesheet_directory_uri() . '/style.css',
                      array('astra-theme-css'),  // parent theme key
                      CHILD_THEME_MOTL_ASTRA_CHILD_VERSION,
                      'all' );

    wp_enqueue_style( 'motl-product-tailwind-style',
                      get_stylesheet_directory_uri() . "/assets/css/style-motl_product.css",
                      array(),
                      CHILD_THEME_MOTL_ASTRA_CHILD_VERSION );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
