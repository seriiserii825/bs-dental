<?php
get_header();

?>
<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <div class="intro intro-small">
        <div class="intro-image fullsize-image-container"
             style="background: url('<?php echo kama_thumb_src('w=1920 &h=540', 504); ?>'); background-size: cover;">

        </div><!-- /.intro-image -->

        <div class="row">
            <div class="intro-caption">
                <h5><?php echo carbon_get_the_post_meta('crb_specialist_profession' . get_lang()); ?></h5>
                <h2><?php the_title(); ?></h2>
            </div><!-- /.intro-caption -->
        </div><!-- /.row -->
    </div><!-- /.intro intro-small -->

    <div class="main grey">
        <div class="columns large-8 medium-7">
            <div class="content" itemscope itemtype="https://schema.org/BlogPosting">
                <article class="event article-single-event">
                    <div class="event-boxs">
                        <div class="event-body" itemprop="articleBody">

                            <div class="doctor-profile">
                                <div class="row">
                                    <div class="small-12 large-4 columns">
										<?php echo kama_thumb_img('w=400 &h=400'); ?>
                                    </div>

<!--                                    <div class="small-12 large-8 columns">-->
<!--                                        <div class="doctor-program">-->
<!--                                            <h4>Availability</h4>-->
<!--                                            <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-2">-->
<!--                                                <li>Monday <span>09:00 - 13:00</span></li>-->
<!--                                                <li>Thursday <span>13:00 - 17:00</span></li>-->
<!--                                                <li>Wednesday <span>09:00 - 13:00</span></li>-->
<!--                                                <li>Thursday <span>13:00 - 17:00</span></li>-->
<!--                                                <li>Friday <span>09:00 - 13:00</span></li>-->
<!--                                                <li>Saturday <span>13:00 - 17:00</span></li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </div>

                            <div class="single-doctor-content">
                                <?php the_content(); ?>
                                
                                <?php $single_spec_services = carbon_get_the_post_meta('crb_single_doctor_services'); ?>
                                <ul class="zebra">
                                   <?php foreach($single_spec_services as $item): ?>
                                    <li><?php echo $item['title'.get_lang()]; ?></li>
                                   <?php endforeach; ?>
                                </ul>
                            </div>
                            
                        </div><!-- /.doctor-body -->
                    </div><!-- /.event-box -->
                </article><!-- /.event article-single-event -->

            </div><!-- /.content -->
        </div><!-- /.columns large-8 -->

        <div class="columns large-4 medium-5">
            <div class="sidebar">
                <div class="widgets">
                    <div class="widgets">
						<?php if (!dynamic_sidebar('news')): ?>
                            <h1 style="color: red;">Сайдбар</h1>
						<?php endif; ?>
                    </div><!-- /.widgets -->
                </div><!-- /.widgets -->
            </div><!-- /.sidebar -->
        </div><!-- /.columns large-4 -->
    </div><!-- /.row -->

    </div><!-- /.main -->

<?php endif; ?>



<?php get_footer(); ?>
