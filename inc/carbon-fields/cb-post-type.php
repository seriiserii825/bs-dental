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
		->add_tab('Meta text', array(
			Field::make('rich_text', 'crb_specialist_meta_text_ru', __('Meta ru')),
			Field::make('rich_text', 'crb_specialist_meta_text_ro', __('Meta ro')),
			Field::make('rich_text', 'crb_specialist_meta_text_en', __('Meta en')),
		));
}
