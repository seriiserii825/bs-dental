<?php
get_header();

if (!defined('ABSPATH')) exit;
?>

<div class="intro intro-small">
    <div class="intro-image fullsize-image-container" data-stellar-background-ratio="0">
        <img src="<?php echo carbon_get_theme_option('crb_services_header_image'); ?>" class="fullsize-image" alt=""/>
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php echo esc_html__('Check Our', 'bs-dental') ?></h5>

            <h2><?php echo esc_html__('Medical Services', 'bs-dental') ?></h2>
        </div><!-- /.intro-caption -->
    </div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main">
    <div class="section-services section-doctors section-doctors-alt" itemscope itemtype="http://schema.org/Product">
        <div class="row">
            <div class="services-grid">

				<?php $services = new WP_Query([
					'category_name' => 'services',
					'posts_per_page' => -1
				]); ?>

				<?php if ($services->have_posts()): ?>
					<?php while ($services->have_posts()): ?>
						<?php $services->the_post(); ?>
                        <div class="service">
                            <div class="service-box">
                                <div class="service-image">
                                    <a href="<?php the_permalink(); ?>">
										<?php echo kama_thumb_img('w=600'); ?>
                                    </a>
                                </div><!-- /.service-image -->

                                <div class="service-body">
                                    <h6 itemprop='alternateName'><?php the_title(); ?></h6>

                                    <p itemprop='description'><?php echo carbon_get_the_post_meta('crb_services_post_short_text' . get_lang()); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="link-more" item-prop='url'>
                                        <i class="fa fa-plus"></i>
										<?php echo esc_html__('Know More', 'bs-dental') ?>
                                    </a>
                                </div><!-- /.service-body -->
                            </div><!-- /.service-box -->
                        </div><!-- /.service -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
            </div>
        </div>

    </div><!-- /.section-services -->
</div><!-- /.main -->

<?php get_footer(); ?>

