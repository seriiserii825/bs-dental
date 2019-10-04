<div class="intro intro-small">
    <div class="intro-image fullsize-image-container">
        <img src="<?php echo kama_thumb_src('w=1920 &h=340', carbon_get_the_post_meta('crb_services_post_image')); ?>"
             class="fullsize-image" alt=""/>
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php the_title(); ?></h5>
        </div><!-- /.intro-caption -->
    </div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main grey">
    <div class="single-content">
        <div class="row">
            <h2 class="single-title"><?php the_title(); ?></h2>
        </div>
        <div class="row">
            <div class="columns large-8 medium-7">
                <div class="content">
                    <article class="event article-single-event">

                        <div class="entry-content">
                            <div class="event-image">
                                <div class="event-slider event-slider-services">
                                    <div class="slider-clip">
										<?php $services_slider = carbon_get_the_post_meta('crb_services_post_slider'); ?>
                                        <ul class="slides">
											<?php foreach ($services_slider as $slide): ?>
                                                <li class="slide">
                                                    <div class="slide-image">
                                                        <img src="<?php echo $slide['crb_services_post_slider_img']; ?>"
                                                             alt=""/>
                                                    </div><!-- /.slide-image -->
                                                </li><!-- /.slide -->
											<?php endforeach; ?>
                                        </ul><!-- /.slides -->
                                    </div><!-- /.slider-clip -->
                                </div><!-- /.event-slider -->
                            </div><!-- /.event-image -->

                            <div class="event-body" itemprop="articleBody">
								<?php if (have_posts()): ?>
									<?php the_post(); ?>
									<?php the_content(); ?>

								<?php else: ?>
								<?php endif; ?>

                            </div><!-- /.event-body -->
                        </div><!-- /.event-box -->
                    </article><!-- /.event article-single-event -->

                </div><!-- /.content -->
            </div><!-- /.columns large-8 -->

            <div class="columns large-4 medium-5">
                <div class="sidebar">
                    <div class="widgets">
						<?php if (!dynamic_sidebar('sidebar')): ?>
                            <h1 style="color: red;">Место для сайдбара</h1>
						<?php endif; ?>
                    </div>
                </div>
            </div><!-- /.columns large-4 -->
        </div><!-- /.row -->

    </div>
</div><!-- /.main -->

