<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-travel-fse
 * @since 1.0.0
 */


function wp_travel_fse_styles() {

	wp_enqueue_style(
		'wp-travel-fse-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script( 
		'wp-travel-fse-custom-js', 
		get_template_directory_uri() . '/assets/js/custom.js', 
		array( 'jquery' ), 
		'20160412', 
		true 
	);

}
add_action( 'wp_enqueue_scripts', 'wp_travel_fse_styles' );


function wp_travel_fse_register_block_pattern_categories(){
    register_block_pattern_category(
        'wptravelfse',
        array( 'label' => __( 'WP Travel', 'wp-travel-fse' ) )
    );

}
add_action('init', 'wp_travel_fse_register_block_pattern_categories');

require get_template_directory() . '/tgm-plugin/tgm-hook.php';