<!-- Page info section end -->
<?php
/**
 * Template Name: Sale
 */
get_header();

if (!defined('ABSPATH')) exit;
?>
<?php if(have_posts()): ?>
    <?php the_post(); ?>
    <div class="intro intro-small">
        <div class="intro-image fullsize-image-container" data-stellar-background-ratio="0">
            <img src="<?php echo carbon_get_the_post_meta('crb_intro_image'); ?>" class="fullsize-image" alt=""/>
        </div><!-- /.intro-image -->

        <div class="row">
            <div class="intro-caption">
                <h5><?php echo carbon_get_theme_option('crb_page_intro_title'.get_lang()); ?></h5>
                <h2><?php the_title(); ?></h2>
            </div><!-- /.intro-caption -->
        </div><!-- /.row -->
    </div><!-- /.intro intro-small -->

    <?php else: ?>
<?php endif; ?>

<div class="main">
    <div class="section-services section-doctors section-doctors-alt" itemscope itemtype="http://schema.org/Product">
        <div class="row">
            <div class="services-grid">

				<?php $sales = new WP_Query([
                    'post_type' => 'sale',
					'posts_per_page' => -1
				]); ?>

				<?php if ($sales->have_posts()): ?>
					<?php while ($sales->have_posts()): ?>
						<?php $sales->the_post(); ?>
                        <div class="service">
                            <div class="service-box">
                                <div class="sale-body service-body">
                                    <header class="sale__header">
                                        <h6 itemprop='alternateName'>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h6>
                                        <div class="sale__taxonomy"><?php echo get_the_terms($post->ID, 'model')[0]->name; ?></div>
                                    </header>

                                    <div class="service-image">
                                        <a href="<?php the_permalink(); ?>">
			                                <?php echo kama_thumb_img('w=526'); ?>
                                        </a>
                                    </div><!-- /.service-image -->

                                    <p itemprop='description'><?php echo carbon_get_the_post_meta('short_text' . get_lang()); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="link-more" item-prop='url'>
                                        <i class="fa fa-plus"></i>
										<?php echo carbon_get_theme_option('button_know'.get_lang()); ?>
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

