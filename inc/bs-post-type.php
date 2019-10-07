<?php

if (!defined('ABSPATH')) exit;

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('testimonials', array(
		'labels' => array(
			'name' => __('Testimonials', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Testimonials', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Testimonials', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));

	register_post_type('technologies', array(
		'labels' => array(
			'name' => __('Technologies', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Technologies', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Technologies', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));

	register_post_type('slider', array(
		'labels' => array(
			'name' => __('Slider', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Slider', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Slider', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));

	register_post_type('specialist', array(
		'labels' => array(
			'name' => __('Specialist', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Specialist', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Specialist', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));
	
	register_post_type('sale', array(
		'labels' => array(
			'name' => __('Sale', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Sale', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Sale', 'bs-dental')
		
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));
}

