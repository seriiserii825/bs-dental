<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_options' );
function crb_attach_blocks_options() {
	Container::make( 'post_meta', __( 'Main Page' ) )
		->where( 'post_id', '=', 284 )
		->add_tab( __('Question Page link'), array(
					Field::make( 'text', 'crb_question_page_link_title_ru', __( 'Question block title ru' ) ),
					Field::make( 'text', 'crb_question_page_link_text_ru', __( 'Question block text ru' ) ),

					Field::make( 'text', 'crb_question_page_link_title_ro', __( 'Question block title ro' ) ),
					Field::make( 'text', 'crb_question_page_link_text_ro', __( 'Question block text ro' ) ),

					Field::make( 'text', 'crb_question_page_link_title_en', __( 'Question block title en' ) ),
					Field::make( 'text', 'crb_question_page_link_text_en', __( 'Question block text en' ) ),
		))


		->add_tab( __('Teeth block'), array(
			Field::make( 'complex', 'crb_teeth_icons', __( 'teeth icons' ) )
				->add_fields( array(
					Field::make( 'text', 'crb_teeth_icons_image', __( 'teeth icons image' ) ),
					Field::make( 'text', 'crb_teeth_icons_title', __( 'teeth icons title' ) ),
					Field::make( 'text', 'crb_teeth_icons_subtitle_ru', __( 'teeth icons subtitle ru' ) ),

					Field::make( 'text', 'crb_teeth_icons_subtitle_ro', __( 'teeth icons subtitle ro' ) ),

					Field::make( 'text', 'crb_teeth_icons_subtitle_en', __( 'teeth icons subtitle En' ) ),
				) )
				->set_layout('tabbed-horizontal')
		));
}
