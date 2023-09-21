<?php
/*
 * Disallow direct access
 */


function travelin_setup() {
	add_theme_support( 'register_block_pattern' ); 

	add_theme_support( 'register_block_style' );
}
add_action( 'after_setup_theme', 'travelin_setup' );
	

function travelin_scripts()
{
    // enqueue parent style
    wp_enqueue_style('travelin-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'travelin_scripts');
