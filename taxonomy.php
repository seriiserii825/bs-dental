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
            <div class="sale-category">
				<?php if (have_posts()): ?>
					<?php $i = 1; while (have_posts()): ?>
                        <?php if($i % 2 == 0): ?>
                        <?php $reverse = 'reverse';  ?>
                        <?php else: ?>
							<?php $reverse = '';  ?>
                        <?php endif; ?>

						<?php the_post(); ?>
                        <div class="sale__item <?php echo $reverse; ?>">
                            <div class="service-image">
								<?php echo kama_thumb_img('w=600'); ?>
                            </div><!-- /.service-image -->

                            <div class="service-body">
                                <h6 itemprop='alternateName'><?php the_title(); ?></h6>
                                <p itemprop='description'><?php echo carbon_get_the_post_meta('short_text' . get_lang()); ?></p>

                                <a href="<?php the_permalink(); ?>" class="link-more" item-prop='url'>
                                    <i class="fa fa-plus"></i>
		                            <?php echo carbon_get_theme_option('button_know'.get_lang()); ?>
                                </a>
                            </div><!-- /.service-box -->
                        </div><!-- /.service -->
					<?php $i++; endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
            </div>
        </div>

    </div><!-- /.section-services -->
</div><!-- /.main -->

<?php get_footer(); ?>

