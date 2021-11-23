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
function motl_child_enqueue_styles_scripts() {
	wp_enqueue_style( 'motl-astra-child-theme-css',
                      get_stylesheet_directory_uri() . '/style.css',
                      array('astra-theme-css'),  // parent theme key
                      CHILD_THEME_MOTL_ASTRA_CHILD_VERSION,
                      'all' );

    $current_post = get_post();

    if( motl_is_post_type_motlProduct($current_post) ) {
        wp_enqueue_style( 'motl-product-style',
                        get_stylesheet_directory_uri() . "/build/css/style-motl_product.css",
                        array(),
                        CHILD_THEME_MOTL_ASTRA_CHILD_VERSION );
        wp_enqueue_style( 'motl-product-tailwind-style',
                        get_stylesheet_directory_uri() . "/build/css/tailwind-css.css",
                        array(),
                        CHILD_THEME_MOTL_ASTRA_CHILD_VERSION );

        /*wp_enqueue_script( 'motl-javascript',
                        get_stylesheet_directory_uri() . "/build/js/product-page.js",
                        array(),
                        CHILD_THEME_MOTL_ASTRA_CHILD_VERSION );*/
    }
}
add_action( 'wp_enqueue_scripts', 'motl_child_enqueue_styles_scripts', 15 );

function motl_is_post_type_motlProduct( $current_post ) {
    if( is_null($current_post) ) {
        return FALSE;
    }
    return 'motl_product' == $current_post->post_type;
}
