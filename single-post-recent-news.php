<div class="intro intro-small">
	<div class="intro-image fullsize-image-container">
		<?php
            $category_id = 15;
		?>
		<img src="<?php echo carbon_get_term_meta($category_id, 'crb_news_category_image'); ?>"
		     class="fullsize-image" alt=""/>
	</div><!-- /.intro-image -->

	<div class="row">
		<div class="intro-caption">
			<h5><?php echo esc_html__('What is new', 'bs-dental') ?></h5>

			<h2><?php the_title(); ?></h2>
		</div><!-- /.intro-caption -->
	</div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main grey">
	<div class="news-content">
		<div class="row">
			<div class="columns large-8 medium-7">
				<div class="content">
					<ol class="events">
						<?php if (have_posts()): ?>
								<?php the_post(); ?>
								<li class="event">
									<div class="event-date" itemprop="datePublished">
										<?php $date = get_the_date('d M, Y'); ?>
										<p><?php echo $date; ?></p>
									</div><!-- /.event-date -->

									<div class="event-box">
										<div class="event-image">
											<div class="event-slider">
												<div class="slider-clip">
													<ul class="slides">
														<li class="slide">
															<div class="slide-image">
																<img src="<?php echo kama_thumb_src('w=767 &h=360'); ?>"
																     alt=""/>
															</div><!-- /.slide-image -->
														</li><!-- /.slide -->
													</ul><!-- /.slides -->
												</div><!-- /.slider-clip -->
											</div><!-- /.event-slider -->
										</div><!-- /.event-image -->

										<div class="event-body" itemprop="articleBody">
											<h4>
												<?php the_title(); ?>
											</h4>

                                            <?php the_content(); ?>
										</div><!-- /.event-body -->

										<div class="event-meta">
											<ul class="list-event-meta">
												<li>
													<a href="#" itemprop="url">
														<i class="fa fa-user"></i>
														<?php the_author(); ?>
													</a>
												</li>

												<li>
													<a href="#" itemprop="url">
														<i class="fa fa-comment"></i>
														<?php $comments_count = wp_count_comments(); ?>
														<?php echo $comments_count->total_comments; ?>
													</a>
												</li>

											</ul>
										</div><!-- /.event-meta -->
									</div><!-- /.event-box -->
								</li><!-- /.event -->
						<?php else: ?>
						<?php endif; ?>


					</ol><!-- /.events -->

				</div><!-- /.content -->
			</div><!-- /.columns large-8 -->

			<div class="columns large-4 medium-5">
				<div class="sidebar">
					<div class="widgets">
						<?php if(!dynamic_sidebar('news')): ?>
							<h1 style="color: red;">Сайдбар</h1>
						<?php endif; ?>
					</div><!-- /.widgets -->
				</div><!-- /.sidebar -->
			</div><!-- /.columns large-4 -->
		</div><!-- /.row -->
	</div>
</div><!-- /.main -->
