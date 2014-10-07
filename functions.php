<?php
	// wp_register_style('stevetheme', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
 //    wp_enqueue_style('stevetheme'); // Enqueue it!
add_action( 'wp_enqueue_scripts', 'load_my_child_styles', 20 );
function load_my_child_styles() {
    wp_enqueue_style( 'stevetheme', get_stylesheet_uri() );
}
?>