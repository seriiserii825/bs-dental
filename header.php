<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php //echo carbon_get_theme_option('crb_facebook_field'); ?>

<div class="wrapper">
    <header class="header">
        <div class="header__item">
            <div class="logo">
				<?php the_custom_logo(); ?>
            </div>
			<?php if (!dynamic_sidebar('language')): ?>
                <h1 style="color: red;">Место для виджета языков</h1>
			<?php endif; ?>
        </div><!-- /.columns large-3 -->

        <div class="header__item">
            <a href="#" class="btn-menu">
                <span></span>
            </a>
			
			<?php wp_nav_menu([
				'theme_location' => 'main-menu',
				'menu' => '',
				'container' => 'nav',
				'container_class' => 'nav',
				'container_id' => '',
				'menu_class' => 'clearfix',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => '',]); ?>

        </div><!-- /.columns large-6 -->

        <div class="header__item">
            <p class="phone">
                <i class="fa fa-mobile"></i>
                <small><?php echo esc_html__('Call Us', 'bs-dental') ?></small>
				<?php
                    $phone = carbon_get_theme_option('crb_phone');
				?>
                <a href='tel:<?php echo clear_phone($phone); ?>'><?php echo $phone; ?></a>
            </p><!-- /.phone -->
        </div><!-- /.columns large-3 -->
</div>

