<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_options' );
function crb_attach_blocks_options() {
	Container::make( 'post_meta', __( 'Blocks' ) )
		->where( 'post_id', '=', 284 )
		->add_tab( esc_html__('Main slider'), array(
			Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
				->add_fields( array(
					Field::make( 'image', 'crb_slider_image', __( 'Slider image' ) )
					->set_help_text('1920x700'),
					Field::make( 'text', 'crb_slider_title_ru', __( 'Slider title ru' ) ),
					Field::make( 'textarea', 'crb_slider_subtitle_ru', __( 'Slider subtitle ru' ) ),

					Field::make( 'text', 'crb_slider_title_ro', __( 'Slider title ro' ) ),
					Field::make( 'textarea', 'crb_slider_subtitle_ro', __( 'Slider subtitle ro' ) ),

					Field::make( 'text', 'crb_slider_title_en', __( 'Slider title En' ) ),
					Field::make( 'textarea', 'crb_slider_subtitle_en', __( 'Slider subtitle En' ) ),
				) )
				->set_layout('tabbed-horizontal')
		));
}
