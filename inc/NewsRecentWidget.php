<?php

if( ! defined('ABSPATH') ) exit;

// Класс виджета
class NewsRecentWidget extends WP_Widget {
	function __construct() {
		// Запускаем родительский класс
		parent::__construct(
			'', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: my_widget
			'News Recent Posts',
			array('description' => 'Widget for news recent posts')
		);

		// стили скрипты виджета, только если он активен
		if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
			add_action('wp_enqueue_scripts', array( $this, 'add_my_widget_scripts' ));
			add_action('wp_head', array( $this, 'add_my_widget_style' ) );
		}
	}

	// Вывод виджета
	function widget($args, $instance ) {
		$args['before_widget'] = '<div class="widget widget-posts">';
		$args['after_widget'] = '</div>';

		$args['before_title'] = '<h3>';
		$args['after_title'] = '</h3>';

		$title = $instance['title'];

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}


		$id = 15;

		$news_posts = new WP_Query([
			'posts_per_page' => 4,
			'cat' => $id
		]);

		$html = '<ol class="list-simple-posts">';

		if($news_posts->have_posts()){
			while($news_posts->have_posts()){
				$news_posts->the_post();
				$html .= '<li>
							<a href="'.get_the_permalink().'">
								<span class="image">
									<img src="'.kama_thumb_src('w=60 &h=68').'"
										 alt=""/>
								</span>

								<span class="info">
									<span class="title">'.get_the_title().'</span>

									<span class="meta">'.get_the_date('d M, Y').'</span>
								</span>
							</a>
						</li>';
			}
			wp_reset_postdata();
		}
		$html .= '</ol>';

		echo $html;

		echo $args['after_widget'];
	}

	// Сохранение настроек виджета (очистка)
	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? ( $new_instance['title'] ) : '';
		return $instance;
	}

	// html форма настроек виджета в Админ-панели
	function form( $instance ) {
		$title = @ $instance['title'] ?: 'Default title';
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	// скрипт виджета
	function add_my_widget_scripts() {
		// фильтр чтобы можно было отключить скрипты
		if( ! apply_filters( 'show_my_widget_script', true, $this->id_base ) )
			return;
	}

	// стили виджета
	function add_my_widget_style() {
	}
}

// Регистрация класса виджета
add_action( 'widgets_init', 'register_news_widget' );
function register_news_widget() {
	register_widget( 'NewsRecentWidget' );
}
