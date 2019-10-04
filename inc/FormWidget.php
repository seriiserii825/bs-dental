<?php

if( ! defined('ABSPATH') ) exit;

// Класс виджета
class FormWidget extends WP_Widget {
	function __construct() {
		// Запускаем родительский класс
		parent::__construct(
			'', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: my_widget
			'Form Widget',
			array('description' => 'Widget for sidebar form')
		);

		// стили скрипты виджета, только если он активен
		if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
			add_action('wp_enqueue_scripts', array( $this, 'add_my_widget_scripts' ));
			add_action('wp_head', array( $this, 'add_my_widget_style' ) );
		}
	}

	// Вывод виджета
	function widget($args, $instance ) {
		$args['before_widget'] = '<div class="widget widget-form">';
		$args['after_widget'] = '</div>';

		$args['before_title'] = '<h3>';
		$args['after_title'] = '</h3>';

		$title = $instance['title'];

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		$html = '<div class="from-appointment">';

		if(get_lang() == '_ru'){
			$html .= do_shortcode('[contact-form-7 id="428" title="Sidebar form ru"]');
        }elseif(get_lang() == '_ro'){
			$html .= do_shortcode('[contact-form-7 id="431" title="Sidebar form ro"]');
        }elseif(get_lang() == '_en'){
			$html .= do_shortcode('[contact-form-7 id="430" title="Sidebar form en"]');
        }
		$html .= '</div>';


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
add_action( 'widgets_init', 'register_form_widget' );
function register_form_widget() {
	register_widget( 'FormWidget' );
}
