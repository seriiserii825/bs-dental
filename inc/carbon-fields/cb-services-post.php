<?php
if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_services_post_options' );
function crb_services_post_options() {
	Container::make( 'post_meta', __( 'Basic Options' ) )
		->where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'services',
			'taxonomy' => 'category',
		) )
		->add_tab( __( 'Show on main' ), array(
			Field::make( 'radio', 'crb_services_post_radio', __( 'Choose Option' ) )
				->set_options( array(
					'hide' => 'hide on main',
					'show' => 'show on main',
				) ),
		))
		->add_tab( __( 'Main Page Short Text' ), array(

			Field::make( 'image', 'crb_services_post_image', __( 'Image' ) )
			->set_help_text('1920x340')
			->set_value_type('url'),
			Field::make( 'complex', 'crb_services_post_slider', __( 'Slider' ) )
			->add_fields( array(
				Field::make( 'image', 'crb_services_post_slider_img', __( 'Slide Photo' ) )
				->set_help_text('760x360')
				->set_value_type('url'),
			) )
			->set_layout('tabbed-horizontal'),

			Field::make( 'textarea', 'crb_services_post_short_text_ru', __( 'Short text ru' ) ),
			Field::make( 'textarea', 'crb_services_post_short_text_ro', __( 'Short text ro' ) ),
			Field::make( 'textarea', 'crb_services_post_short_text_en', __( 'Short text en' ) ),
		));
}
