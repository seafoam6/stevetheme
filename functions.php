<?php
	// wp_register_style('stevetheme', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
 //    wp_enqueue_style('stevetheme'); // Enqueue it!
add_action( 'wp_enqueue_scripts', 'load_my_child_styles', 20 );

function load_my_child_styles() {
    wp_enqueue_style( 'stevetheme', get_stylesheet_uri() );
}

// Register Script
function steve_js() {

	wp_register_script( 'stevejs', get_stylesheet_directory_uri() .'/js/steve.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'stevejs' );
}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'steve_js' );

?>