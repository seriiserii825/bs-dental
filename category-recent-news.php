<?php
get_header(); ?>
<div class="intro intro-small">
    <div class="intro-image fullsize-image-container">
		<?php $category = get_queried_object(); ?>
        <img src="<?php echo carbon_get_term_meta($category->term_id, 'crb_news_category_image'); ?>"
             class="fullsize-image" alt=""/>
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php echo esc_html__('What is new', 'bs-dental') ?></h5>

            <h2><?php single_cat_title(); ?></h2>
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
							<?php while (have_posts()): ?>
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
                                                <a href="<?php the_permalink(); ?>"
                                                   itemprop="url"><?php the_title(); ?></a>
                                            </h4>

                                            <p><?php echo carbon_get_the_post_meta('crb_news_post_short_text' . get_lang()); ?></p>
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

                                                <li>
                                                    <a href="<?php the_permalink(); ?>" class="link" itemprop="url">
                                                        <i class="fa fa-plus"></i>
														<?php echo esc_html__('Know More', 'bs-dental') ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.event-meta -->
                                    </div><!-- /.event-box -->
                                </li><!-- /.event -->

							<?php endwhile; ?>
							<?php the_posts_pagination([

								'show_all' => false, // показаны все страницы участвующие в пагинации
								'end_size' => 1,     // количество страниц на концах
								'mid_size' => 1,     // количество страниц вокруг текущей
								'prev_next' => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
								'prev_text' => __('« Previous'),
								'next_text' => __('Next »'),
								'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
								'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
								'screen_reader_text' => __('Posts navigation'),]); ?>
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
<?php get_footer(); ?>
