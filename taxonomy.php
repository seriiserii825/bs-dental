<?php
get_header();

if (!defined('ABSPATH')) exit;
?>

<div class="intro intro-small">
    <div class="intro-image fullsize-image-container" data-stellar-background-ratio="0">
        <img src="<?php echo kama_thumb_src('w=1920 &h=500', 558); ?>" class="fullsize-image" alt=""/>
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php echo carbon_get_theme_option('cb_taxonomy_title' . get_lang()); ?></h5>

            <h2><?php the_title(); ?></h2>
        </div><!-- /.intro-caption -->
    </div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main">
    <div class="section-services section-doctors section-doctors-alt" itemscope itemtype="http://schema.org/Product">
        <div class="row">
            <div class="services-grid sale">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): ?>
						<?php the_post(); ?>
                        <div class="service">
                            <div class="service-box">
                                <div class="service-image">
									<?php echo kama_thumb_img('w=600'); ?>
                                </div><!-- /.service-image -->

                                <div class="service-body">
                                    <h6 itemprop='alternateName'><?php the_title(); ?></h6>
									
									<?php the_content(); ?>

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

