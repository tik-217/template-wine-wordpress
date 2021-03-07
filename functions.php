<?php

add_action( 'wp_enqueue_scripts', 'scripts' );

function scripts(){
	// styles
	wp_enqueue_style( 'slick.css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'style.min.css', get_template_directory_uri() . '/assets/css/style.min.css' );

	// scripts
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '1.0', true );
	wp_enqueue_script( 'app.js', get_template_directory_uri() .'/assets/js/app.js', array(), '1.0', true );
}