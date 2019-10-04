<?php
/**
 * Template Name: Вопросы
 */
get_header(); ?>

<div class="intro intro-small">
    <div class="intro-image fullsize-image-container" data-stellar-background-ratio="0.54">
        <img src="<?php echo carbon_get_theme_option('crb_questions_img'); ?>" class="fullsize-image" alt=""/>
    </div><!-- /.intro-image -->

    <div class="row">
        <div class="intro-caption">
            <h5><?php echo esc_html__('Ask a question', 'bs-dental') ?></h5>

            <h2><?php echo esc_html__('Question Answers', 'bs-dental') ?></h2>
        </div><!-- /.intro-caption -->
    </div><!-- /.row -->
</div><!-- /.intro intro-small -->

<div class="main grey">
    <div class="row">

        <div class="columns large-8 medium-12">
            <div class="content">
				<?php $questions = carbon_get_theme_option('crb_question_accordeon'); ?>

                <div class="accordion">
                    <ul>
	                    <?php foreach ($questions as $question): ?>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2 class="title_block"><?php echo $question['title'.get_lang()]; ?></h2>
                                <div class="msg">
                                    <div class="accordion__text">
                                        <?php echo $question['text'.get_lang()]; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

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

<?php get_footer(); ?>
