<?php
get_header(); ?>

<div class="intro intro-small">
	<div class="intro-image fullsize-image-container">
		<img src="<?php echo carbon_get_theme_option('crb_technologies'); ?>" class="fullsize-image" alt=""/>
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
                                        <?php the_post_thumbnail('full'); ?>
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
						<?php if (!dynamic_sidebar('technologies')): ?>
							<h1 style="color: red;">Место для сайдбара</h1>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- /.columns large-4 -->
		</div><!-- /.row -->

	</div>
</div><!-- /.main -->


<?php get_footer(); ?>
