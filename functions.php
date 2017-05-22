<?php

	/**
	 * Add a custom thumbnail size that will be used for the front page.
	 */
	function add_custom_sizes() {
		add_image_size( 'front-page', 250, 250, array( 'center', 'center' ) );
	}
	add_action('after_setup_theme','add_custom_sizes');

	/**
	 * Remove the styles added by the parent theme
	 */
	function frxdxrique_remove_parent_styles() {
		wp_dequeue_style('_tk-bootstrap');
		wp_dequeue_style('_tk-bootstrap-wp');
	}
	add_action('wp_enqueue_scripts', 'frxdxrique_remove_parent_styles', 20);

	/**
	 * Enqueue this theme's themes.
	 */
	function fdesign_enqueue_styles() {
		wp_enqueue_style('fdesign-bootstrap-wp',
						 get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );
		
		wp_enqueue_style('fdesign-style',
						 get_stylesheet_directory_uri() . '/css/style.css',
						 array(),
						 wp_get_theme()->get('version')
						);
	}
	add_action('wp_enqueue_scripts', 'fdesign_enqueue_styles');

/**
 * Customize the theme logo size.
 */
function fd_logo_support() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 400,
		'flex-height' => true,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'fd_logo_support' );


/**
 * Load custom WordPress nav walker.
 */
require 'inc/counting-bootstrap-wp-navwalker.php';
?>