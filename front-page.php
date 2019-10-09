<?php
/**
 * Template Name: Главная
 */
get_header();

$page_front_id = 284;

?>

<div class="intro">
    <div class="intro-slider">
		<?php $slider = new WP_Query([
			'post_type' => 'slider',
			'posts_per_page' => -1
		]); ?>

        <div class="slider-clip">
            <ul class="slides">

				<?php if ($slider->have_posts()): ?>
					<?php while ($slider->have_posts()): ?>
						<?php $slider->the_post(); ?>
                        <li class="slide fullsize-image-container">
                            <div class="slide-image">
                                <img src="<?php echo kama_thumb_src('w=1920 &h=700'); ?>" class="fullsize-image"
                                     alt=""/>
                            </div><!-- /.slide-image -->

                            <div class="slide-caption">
                                <h5><?php echo esc_html__('Health', 'bs-dental') ?></h5>

                                <div class="slide-caption-inner">
                                    <h1>
                                        <span><?php the_title(); ?></span>
                                    </h1>
                                    <p class="mobile-hidden">
                                        <a href="<?php echo get_page_link(262); ?>"><?php echo carbon_get_the_post_meta('crb_slider_text'.get_lang()); ?></a>
                                    </p>
                                </div><!-- /.slide-caption-inner -->
                            </div><!-- /.slide-caption -->
                        </li><!-- /.slide -->

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>


            </ul><!-- /.slides -->
        </div><!-- /.slider-clip -->
    </div><!-- /.intro-slider -->
</div><!-- /.intro -->

<div class="main">

    <!-- Book appointment -->
    <section class="section section-book-appointment" id="section-book-appointment">
        <div class="section-ribbon">
            <i class="icon-medical-checklist"></i>
        </div><!-- /.section-ribbon -->

        <div class="section-body">
            <div class="form-appointment">
                <header class="form-head row">
                    <div class="columns large-12 medium-12">
                        <h2><?php echo carbon_get_theme_option('crb_index_form_title' . get_lang()); ?></h2>
                        <h6><?php echo carbon_get_theme_option('crb_index_form_subtitle' . get_lang()); ?></h6>
                    </div><!-- /.columns large-6 -->
                </header><!-- /.form-head -->
				<?php if (get_lang() == '_ru'): ?>
					<?php echo do_shortcode('[contact-form-7 id="432" title="Index form ru"]'); ?>
				<?php elseif (get_lang() == '_ro'): ?>
					<?php echo do_shortcode('[contact-form-7 id="436" title="Index form ro"]'); ?>
				<?php elseif (get_lang() == '_en'): ?>
					<?php echo do_shortcode('[contact-form-7 id="435" title="Index form en"]'); ?>
				<?php endif; ?>

            </div><!-- /.form-appoitment -->
        </div><!-- /.section-body -->
    </section><!-- /.section-book-appointment -->

    <!-- Section Information -->
    <section class="section section-information">
        <div class="row">
            <div class="columns large-6 medium-12 grey">
                <section class="section-about-us fullsize-image-container">
                    <h6><?php echo carbon_get_theme_option('crb_care_main_title' . get_lang()); ?></h6>

                    <h2><?php echo carbon_get_theme_option('crb_care_title' . get_lang()); ?></h2>

                    <h3><?php echo carbon_get_theme_option('crb_care_subtitle' . get_lang()); ?></h3>

                    <p class="section-features__text"><?php echo carbon_get_theme_option('crb_care_text' . get_lang()); ?></p>

                    <ul class="section-information__list list-features" itemscope itemtype="http://schema.org/Product">
		                <?php $technologies_posts = new WP_Query([
			                'posts_per_page' => 6,
			                'post_type' => 'technologies'
		                ]); ?>
		                <?php if ($technologies_posts->have_posts()): ?>
			                <?php while ($technologies_posts->have_posts()): ?>
				                <?php $technologies_posts->the_post(); ?>
                                <li>
                                    <p itemprop="name">
                                        <a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i>
							                <?php the_title(); ?></a>
                                    </p>
                                </li>
			                <?php endwhile; ?>
			                <?php wp_reset_postdata(); ?>
		                <?php else: ?>
		                <?php endif; ?>

                    </ul><!-- /.list-features -->

                    <a href="<?php echo get_page_link(356); ?>" class="button button--left btn-white btn-small">
		                <?php echo carbon_get_theme_option('button_know'.get_lang());?>
                    </a>

                </section><!-- /.section-about-us -->
            </div><!-- /.columns large-6 -->

            <div class="columns large-6 medium-12 blue">
                <section class="section-features">
                    <h6><?php echo carbon_get_theme_option('crb_services_title' . get_lang()); ?></h6>

                    <h2><?php echo carbon_get_theme_option('crb_services_subtitle' . get_lang()); ?></h2>

                    <p class="section-features__text"><?php echo carbon_get_theme_option('crb_services_text' . get_lang()); ?></p>

                    <ul class="section-information__list list-features" itemscope itemtype="http://schema.org/Product">
						<?php $services_posts = new WP_Query([
							'posts_per_page' => 6,
							'category_name' => 'services'
						]); ?>
						<?php if ($services_posts->have_posts()): ?>
							<?php while ($services_posts->have_posts()): ?>
								<?php $services_posts->the_post(); ?>
                                <li>
                                    <p itemprop="name">
                                        <a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i>
											<?php the_title(); ?></a>
                                    </p>
                                </li>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else: ?>
						<?php endif; ?>

                    </ul><!-- /.list-features -->

                    <a href="<?php echo get_category_link(11); ?>" class="button btn-white btn-small">
	                    <?php echo carbon_get_theme_option('button_know'.get_lang());?>
                    </a>
                </section><!-- /.section-features -->
            </div><!-- /.columns large-6 -->
        </div><!-- /.row -->
    </section><!-- /.section-information -->

    <!-- Doctors -->
    <section class="section section-doctors">
        <div class="section-ribbon">
            <i class="icon-doctor"></i>
        </div><!-- /.section-ribbon -->

        <header class="section-head">
            <h2><?php echo carbon_get_theme_option('crb_specialist_title' . get_lang()); ?></h2>

            <h6><?php echo carbon_get_theme_option('crb_specialist_subtitle' . get_lang()); ?></h6>
        </header><!-- /.section-head -->

        <div class="row">
			<?php $specialist = new WP_Query([
				'posts_per_page' => 3,
				'post_type' => 'specialist'
			]); ?>

			<?php if ($specialist->have_posts()): ?>
				<?php while ($specialist->have_posts()): ?>
					<?php $specialist->the_post(); ?>
                    <div class="columns large-4 medium-4">
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
	                                <?php echo carbon_get_theme_option('button_know'.get_lang());?>
                                </a>
                            </div><!-- /.doctor-box -->
                        </div><!-- /.doctor -->
                    </div><!-- /.columns large-4 -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
			<?php endif; ?>

        </div><!-- /.row -->

        <div class="section-actions">
            <a href="<?php echo get_page_link(505); ?>" class="button btn-grey btn-small"><?php echo carbon_get_theme_option('button_all_doctors'.get_lang()); ?></a>
        </div><!-- /.section-actions -->
    </section><!-- /.section-doctors -->

    <section class="section partners">
        <div class="section-head">
            <h2 class="h2-title"><span>Reprezentanți oficiali al companiilor</span></h2>
        </div>
        <div class="partners__content">
            <a href="http://bioresearchinc.com/" class="partners__item"><img src="<?php echo get_template_directory_uri().'/assets/images/partners/logo1.jpg'; ?>" alt=""></a>
            <a href="https://www.tekscan.com/dental" class="partners__item"><img src="<?php echo get_template_directory_uri().'/assets/images/partners/logo2.jpg'; ?>" alt=""></a>
            <a href="http://ru.a-dec.com/en/Products/Dental-Chairs/Dental-Chairs/A-dec-500?sc_lang=en/" class="partners__item"><img src="<?php echo get_template_directory_uri().'/assets/images/partners/logo3.jpg'; ?>" alt=""></a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section section-testimonials">
        <header class="section-head">
            <i class="fa fa-quote-left"></i>

            <h2><?php echo esc_html__('What our patients have to say', 'bs-dental') ?></h2>

            <h6><?php echo esc_html__('We are reliable &amp; Trusted', 'bs-dental') ?></h6>
        </header><!-- /.section-head -->

		<?php $testimonials = new WP_Query([
			'post_type' => 'testimonials',
			'posts_per_page' => -1
		]); ?>
        <div class="row">
            <div class="slider-testimonials">
                <div class="slider-clip">
                    <ul class="slides">
						<?php if ($testimonials->have_posts()): ?>
							<?php while ($testimonials->have_posts()): ?>
								<?php $testimonials->the_post(); ?>
                                <li class="slide">
                                    <div class="slide-caption">
                                        <blockquote><?php the_content(); ?></blockquote>

                                        <div class="user">
                                            <div class="user-image">
												<?php echo kama_thumb_a_img('w=82 &h=82'); ?>
                                            </div><!-- /.user-image -->

                                            <div class="user-meta">
                                                <h6><?php the_title(); ?></h6>
                                            </div><!-- /.user-meta -->
                                        </div><!-- /.user -->
                                    </div><!-- /.slide-caption -->
                                </li><!-- /.slide -->
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else: ?>
						<?php endif; ?>
                    </ul><!-- /.slides -->
                </div><!-- /.slider-clip -->
            </div><!-- /.slider-testimonials -->
        </div><!-- /.row -->
    </section><!-- /.section-testimonials -->

    <!-- News -->
    <section class="section section-updates">
        <div class="section-ribbon">
            <i class="fa fa-bullhorn"></i>
        </div><!-- /.section-ribbon -->

        <header class="section-head">
            <h2><?php echo carbon_get_theme_option('crb_latest_posts_title' . get_lang()); ?></h2>
            <h6><?php echo carbon_get_theme_option('crb_latest_posts_subtitle' . get_lang()); ?></h6>
        </header><!-- /.section-head -->

		<?php
		$recent_news = new WP_Query([
			'category_name' => 'recent-news',
			'posts_per_page' => 1
		]);
		$first_post_id = '';
		?>

        <div class="row">
            <div class="column large-6 medium-6">
				<?php if ($recent_news->have_posts()): ?>
					<?php while ($recent_news->have_posts()): ?>
						<?php $recent_news->the_post(); ?>
                        <?php $first_post_id = get_the_ID(); ?>
                        <div class="event">

                            <div class="event-date">
                                <p>
                                    <span class="event-month"><?php echo get_the_date('M'); ?> </span>
									<?php echo get_the_date('d, Y'); ?>
                                </p>
                            </div><!-- /.event-date -->

                            <div class="event-box">
                                <div class="event-image">
                                    <a href="<?php the_permalink(); ?>">
										<?php echo kama_thumb_img('w=270 &h=177'); ?>
                                    </a>
                                </div><!-- /.event-image -->

                                <div class="event-entry">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>

                                    <p><?php echo carbon_get_the_post_meta('crb_news_post_short_text' . get_lang()); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="link-more">
                                        <i class="fa fa-plus"></i>
	                                    <?php echo carbon_get_theme_option('button_know'.get_lang());?>
                                    </a>
                                </div><!-- /.event-entry -->
                            </div><!-- /.event-box -->
                        </div><!-- /.event -->

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
            </div><!-- /.column large-6 -->


			<?php
			$recent_news = new WP_Query([
				'category_name' => 'recent-news',
				'posts_per_page' => 5,
                'post__not_in' => [$first_post_id]
			]);
			?>
            <div class="column large-6 medium-6">
                <ul class="list-events">
					<?php if ($recent_news->have_posts()): ?>
						<?php while ($recent_news->have_posts()): ?>
							<?php $recent_news->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
								<span class="image">
                                    <?php echo kama_thumb_img('w=270 &h=177'); ?>
								</span>
                                        <span class="title"><?php the_title(); ?></span>
                                    </a>
                                </li>
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else: ?>
					<?php endif; ?>
                </ul><!-- /.list-events -->
            </div><!-- /.column large-6 -->
        </div><!-- /.row -->

        <div class="section-actions">
            <a href="<?php echo get_category_link(15); ?>" class="button btn-light-blue btn-small"><?php echo esc_html__( 'More news', 'bs-dental' )
             ?></a>
        </div><!-- /.section-actions -->
    </section><!-- /.section-updates -->
</div><!-- /.main -->

<?php get_footer(); ?>



