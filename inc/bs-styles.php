<?php

if( ! defined('ABSPATH') ) exit;

function bs_dental_scripts() {
	wp_enqueue_style( 'bs-dental-style', get_stylesheet_uri() );
	wp_enqueue_style('bs-accordeon-css', get_template_directory_uri().'/assets/libs/accordeon/css/accordion.css');
	wp_enqueue_style('bs-custom-css', get_template_directory_uri().'/assets/css/custom.css');

//	wp_deregister_script( 'jquery' );
//	wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js', false, null, true );
//	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('bs-vendor-js', get_template_directory_uri().'/assets/javascripts/vendor.js', ['jquery'], null, true);
//	wp_enqueue_script('bs-jquery-stellar-js', get_template_directory_uri().'/assets/javascripts/jquery.stellar.min.js', ['jquery'], null, true);
	wp_enqueue_script('bs-app-js', get_template_directory_uri().'/assets/javascripts/app.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_dental_scripts' );
