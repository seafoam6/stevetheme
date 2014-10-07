<?php
	// wp_register_style('stevetheme', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
 //    wp_enqueue_style('stevetheme'); // Enqueue it!
add_action( 'wp_enqueue_scripts', 'load_my_child_styles', 20 );

function load_my_child_styles() {
    wp_enqueue_style( 'stevetheme', get_stylesheet_uri() );
}
// Register Script
function foundation_scripts() {

	wp_register_script( 'foundationjs', get_stylesheet_directory_uri() .'/js/foundation.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'foundationjs' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'foundation_scripts' );

?>