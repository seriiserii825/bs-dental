<?php

get_header();

if (!defined('ABSPATH')) exit;
?>

<?php
    if(in_category(11)){
       require_once __DIR__.'/single-services.php';
    }elseif(in_category(15)){
	    require_once __DIR__.'/single-post-recent-news.php';
    }else{
        the_title();
        the_content();
    }

?>

<?php get_footer(); ?>

