<?php
/**
 * foodylite Theme Customizer
 *
 * @package foodylite
 */

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function foodylite_customize_preview_js() {
	wp_enqueue_script( 'foodylite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'foodylite_customize_preview_js' );

/**
 * Customizer CSS
 */
function foodylite_enqueue_customizer_controls_styles() {

  wp_register_style( 'foodylite-customizer-controls', get_template_directory_uri() . '/css/customizer-controls.css', NULL, NULL, 'all' );
  wp_enqueue_style( 'foodylite-customizer-controls' );

  }
add_action( 'customize_controls_print_styles', 'foodylite_enqueue_customizer_controls_styles' );

/**
 * Customizer Panel: Settings
 */
require get_template_directory() . '/inc/options/customizer-settings.php';

/**
 * Customizer Panel: General Style
 */
require get_template_directory() . '/inc/options/customizer-options.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function foodylite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'foodylite_customize_register' );

/**
 * Read More Class
 */
if ( class_exists( 'WP_Customize_Control' ) ) {

	class Foodylite_Read_More extends WP_Customize_Control {

    	public $type = "foodylite-read-more";
	
		public function render_content() {
        $read_more = array(
			'upgrade' => array(
			'link' => esc_url('https://www.pankogut.com/wordpress-themes/foodypro/?utm_source=customizer_read_more&utm_medium=wordpress_dashboard&utm_campaign=foodypro'),
			'text' => __('Try Foody Pro', 'foodylite'),
			),
			'theme' => array(
			'link' => esc_url('http://pankogut.com/wordpress-themes/foodylite'),
			'text' => __('Theme Homepage', 'foodylite'),
			),
			'documentation' => array(
			'link' => esc_url('https://www.pankogut.com/docs/foodylite/?utm_source=customizer_read_more&utm_medium=wordpress_dashboard&utm_campaign=foodypro'),
			'text' => __('Theme Documentation', 'foodylite'),
			),
			'rating' => array(
			'link' => esc_url('https://wordpress.org/support/theme/foodylite/reviews/#new-post'),
			'text' => __('Rate This Theme', 'foodylite'),
			),
			'twitter' => array(
			'link' => esc_url('https://twitter.com/pankogut'),
			'text' => __('Follow on Twitter', 'foodylite'),
			)
        );
        foreach ($read_more as $read_more_single) {
        	echo '<p><a class="button" target="_blank" href="' . esc_url( $read_more_single['link'] ). '" >' . esc_html($read_more_single['text']) . ' </a></p>';
        	}
    	}
	}

}