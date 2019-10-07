<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_doctors_page_options' );
function crb_doctors_page_options() {
	Container::make( 'post_meta', __( 'Doctors' ) )
		->where( 'post_id', '=', 505 )
		->add_fields(  array(
			Field::make( 'text', 'crb_intro_title_ro', __( 'crb_intro_title_ro' ) )
			->set_width(30),
			Field::make( 'text', 'crb_intro_title_ru', __( 'crb_intro_title_ru' ) )
			->set_width(30),
			Field::make( 'text', 'crb_intro_title_en', __( 'crb_intro_title_en' ) )
			->set_width(30),
		));
}
