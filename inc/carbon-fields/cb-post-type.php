<?php
if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_technologies_post_options');
function crb_technologies_post_options()
{
	Container::make('post_meta', __('Short text'))
		->where('post_type', '=', 'technologies')
		->add_fields(array(
			Field::make('textarea', 'crb_services_technologies_short_text_ru', __('Short text ru'))
				->set_width(30),
			Field::make('textarea', 'crb_services_technologies_short_text_ro', __('Short text ro'))
				->set_width(30),
			Field::make('textarea', 'crb_services_technologies_short_text_en', __('Short text en'))
				->set_width(30),
		
		));
}

add_action('carbon_fields_register_fields', 'crb_specialist_post_options');
function crb_specialist_post_options()
{
	Container::make('post_meta', __('Short text'))
		->where('post_type', '=', 'specialist')
		->add_tab('Info', array(
			Field::make('text', 'crb_specialist_profession_ro', __('crb_specialist_profession_ro'))
				->set_width(30),
			Field::make('text', 'crb_specialist_profession_ru', __('crb_specialist_profession_ru'))
				->set_width(30),
			Field::make('text', 'crb_specialist_profession_en', __('crb_specialist_profession_en'))
				->set_width(30),
		))
		->add_tab('Services', array(
			Field::make('complex', 'crb_single_doctor_services', __('crb_single_doctor_services'))
				->add_fields(array(
					Field::make('text', 'title_ro', __('title_ro'))
						->set_width(30),
					Field::make('text', 'title_ru', __('title_ru'))
						->set_width(30),
					Field::make('text', 'title_en', __('title_en'))
						->set_width(30),
				))
				->set_layout('tabbed-horizontal'),
		))
		->add_tab('Meta text', array(
			Field::make('rich_text', 'crb_specialist_meta_text_ru', __('Meta ru')),
			Field::make('rich_text', 'crb_specialist_meta_text_ro', __('Meta ro')),
			Field::make('rich_text', 'crb_specialist_meta_text_en', __('Meta en')),
		));
}

add_action('carbon_fields_register_fields', 'crb_slider_post_options');
function crb_slider_post_options()
{
	Container::make('post_meta', __('Caption'))
		->where('post_type', '=', 'slider')
		->add_tab('Meta text', array(
			Field::make('text', 'crb_slider_text_ru', __('Meta ru'))
				->set_width(30),
			Field::make('text', 'crb_slider_text_ro', __('Meta ro'))
				->set_width(30),
			Field::make('text', 'crb_slider_text_en', __('Meta en'))
				->set_width(30),
		));
}

add_action('carbon_fields_register_fields', 'crb_sale_options');
function crb_sale_options()
{
	Container::make('post_meta', __('Caption'))
		->where('post_type', '=', 'sale')
		->add_fields(array(
			Field::make('text', 'crb_sale_price_ro', __('Sale price ro'))
				->set_width(30),
			Field::make('text', 'crb_sale_price_ru', __('Sale price ru'))
				->set_width(30),
			Field::make('text', 'crb_sale_price_en', __('Sale price en'))
				->set_width(30),
		));
}
