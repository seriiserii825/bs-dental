<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs-dental
 */

/**
 * Template Name: Контакты
 */

get_header();
?>

    <div class="intro intro-small">
        <div class="intro-image fullsize-image-container" data-stellar-background-ratio="0.54">
            <img src="<?php echo carbon_get_theme_option('crb_contacts_page_bg'); ?>" class="fullsize-image" alt=""/>
        </div><!-- /.intro-image -->

        <div class="row">
            <div class="intro-caption">
                <h5><?php echo carbon_get_theme_option('crb_page_contacts_title'.get_lang()); ?></h5>

                <h2><?php echo carbon_get_theme_option('crb_page_contacts_subtitle'.get_lang()); ?></h2>
            </div><!-- /.intro-caption -->
        </div><!-- /.row -->
    </div><!-- /.intro intro-small -->

    <div class="main grey">
        <div class="row">

            <div class="columns large-8 medium-12">
                <div class="content">
                    <article class="event article-single-event">
                        <div class="event-body" itemprop="articleBody">
                            <div class="row">
                                <div class="columns small-12">
                                    <div class="contacts-content">
										<?php if (have_posts()): ?>
											<?php the_post(); ?>
											<?php the_content(); ?>

										<?php else: ?>
										<?php endif; ?>
                                    </div>
                                </div><!-- /.columns small-12 -->

                            </div><!-- /.row -->

                        </div><!-- /.event-body -->
                    </article><!-- /.event article-single-event -->

                </div><!-- /.content -->
            </div><!-- /.columns large-8 -->

            <div class="columns large-4 medium-12">
                <div class="sidebar">
                    <div class="widgets">
						<?php if (!dynamic_sidebar('news')): ?>
                            <h1 style="color: red;">Сайдбар</h1>
						<?php endif; ?>
                    </div><!-- /.widgets -->
                </div><!-- /.sidebar -->
            </div><!-- /.columns large-4 -->
        </div>
    </div><!-- /.main -->

<?php
get_footer();
