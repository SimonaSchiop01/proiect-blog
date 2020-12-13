<?php

function blog_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'blog_scripts' );

function blog_menu() {

	$locations = array(
		'primary'  => __( 'Header navigation', 'blog_menu' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'blog_menu' );