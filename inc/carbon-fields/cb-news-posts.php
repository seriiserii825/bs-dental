<?php
if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_news_post_options' );
function crb_news_post_options() {
	Container::make( 'post_meta', __( 'Basic Options' ) )
		->where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'recent-news',
			'taxonomy' => 'category',
		) )
		->add_tab( __( 'Short Text', 'bs-dental' ), array(
			Field::make( 'textarea', 'crb_news_post_short_text_ru', __( 'Short text ru' ) ),
			Field::make( 'textarea', 'crb_news_post_short_text_ro', __( 'Short text ro' ) ),
			Field::make( 'textarea', 'crb_news_post_short_text_en', __( 'Short text en' ) ),
		));
}
