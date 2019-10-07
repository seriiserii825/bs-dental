<?php
/**
 * Template Name: Doctors
 */
get_header(); ?>
<div class="intro intro-small">
    <div class="intro-image fullsize-image-container"
         style="background: url('<?php echo getThePostThumbSrc(1920, 560); ?>'); background-size: cover;">
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php echo carbon_get_post_meta(505, 'crb_intro_title' . get_lang()); ?></h5>
            <h2><?php the_title(); ?></h2>
        </div><!-- /.intro-caption -->
    </div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main">
    <div class="page-doctors">
		<?php $specialist = new WP_Query([
			'posts_per_page' => -1,
			'post_type' => 'specialist'
		]); ?>
		
		<?php if ($specialist->have_posts()): ?>
			<?php while ($specialist->have_posts()): ?>
				<?php $specialist->the_post(); ?>
                <div class="doctor">
                    <h5 class="doctor-name"><?php the_title(); ?></h5>

                    <div class="doctor-box">
                        <div class="doctor-image">
                            <a href="<?php the_permalink(); ?>">
								<?php echo kama_thumb_img('w=367 &crop=top') ?>
                            </a>
                        </div>

                        <div class="doctor-body">
							<?php the_content(); ?>
                        </div><!-- /.doctor-body -->

                        <a href="<?php the_permalink(); ?>" class="link-more">
                            <i class="fa fa-plus"></i>
							<?php echo carbon_get_theme_option('button_know' . get_lang()); ?>
                        </a>
                    </div><!-- /.doctor-box -->
                </div><!-- /.doctor -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<?php endif; ?>

    </div>

</div><!-- /.main -->
<?php get_footer(); ?>
