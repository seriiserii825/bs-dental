<?php
/**
 * bs-dental functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bs-dental
 */

if( ! defined('ABSPATH') ) exit;

require_once __DIR__.'/inc/func.php';

require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-main-page.php';
require_once __DIR__.'/inc/carbon-fields/cb-services-post.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-type.php';
require_once __DIR__.'/inc/carbon-fields/cb-news-category.php';
require_once __DIR__.'/inc/carbon-fields/cb-news-posts.php';
require_once __DIR__.'/inc/carbon-fields/cb-page.php';

require_once __DIR__.'/inc/bs-theme-support.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-widgets.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/bs-taxonomy.php';

require_once __DIR__.'/inc/ServicesWidget.php';
require_once __DIR__.'/inc/FormWidget.php';
require_once __DIR__.'/inc/NewsRecentWidget.php';
require_once __DIR__.'/inc/TechnologiesWidget.php';


function bs_dental_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bs_dental_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_dental_content_width', 0 );
