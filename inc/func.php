<?php

if( ! defined('ABSPATH') ) exit;

function clear_phone($phone)
{
	return str_replace(['(', ')', '-', '+', ' '], '', $phone);
}

function vardump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang()
{
	$suffix = '';
	if (!defined('ICL_LANGUAGE_CODE')) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

function trim_content($content, $count)
{
	$trimmed_content = wp_trim_words($content, $count, '<a href="' . get_permalink() . '"></a>');
	return $trimmed_content;
}

function get_lang()
{
	$suffix = '';

	if (get_locale() == 'en_US') {
		$suffix = '_en';
	}
	if (get_locale() == 'ru_RU') {
		$suffix = '_ru';
	}
	if (get_locale() == 'ro_RO') {
		$suffix = '_ro';
	}

	return strtolower($suffix);
}

function my_revisions_to_keep($revisions)
{
	return 2;
}

function getThePostThumbSrc($width, $height) {
	$id = get_the_ID();
	
	return kama_thumb_src( 'w='.$width.' &h='.$height.' &post_id=' . $id . '' );
}

add_filter('wp_revisions_to_keep', 'my_revisions_to_keep');
