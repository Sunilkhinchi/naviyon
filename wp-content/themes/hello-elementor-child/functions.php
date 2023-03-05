<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);

	
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );



function load_bootstrapcss() {
    wp_register_style('style_bootstrap',get_stylesheet_directory_uri().'/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('style_bootstrap');
}
add_action('wp_enqueue_scripts','load_bootstrapcss');

function  load_bootstrapjs() {
    wp_register_script('script_bootstrap_js',get_stylesheet_directory_uri().'/js/bootstrapjs/bootstrap.min.js');
    wp_enqueue_script('script_bootstrap_js');
}
add_action('wp_enqueue_scripts','load_bootstrapjs');


// display 8 product 


function display_product_function($atts) {
	echo "hello";
    
}
add_shortcode('display_product_shortcode', 'display_product_function');



