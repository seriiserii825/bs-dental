<?php

if( ! defined('ABSPATH') ) exit;

function bs_dental_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Language', 'bs-dental' ),
		'id'            => 'language',
		'description'   => esc_html__( 'Add widgets', 'bs-dental' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-dental' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here', 'bs-dental' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Technologies', 'bs-dental' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here', 'bs-dental' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar News', 'bs-dental' ),
		'id'            => 'news',
		'description'   => esc_html__( 'Add widgets here', 'bs-dental' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_dental_widgets_init' );
