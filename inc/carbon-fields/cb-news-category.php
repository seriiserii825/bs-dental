<?php
if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_news_category_options' );
function crb_news_category_options() {
	Container::make( 'term_meta', __( 'News Category' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_tab( __( 'Image' ), array(
			Field::make( 'image', 'crb_news_category_image', __( 'Image' ) )
				->set_help_text('1920x340')
				->set_value_type('url')
		));
}
