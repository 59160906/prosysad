<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @package FoodyLite
 */
final class Foodylite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once get_template_directory() . '/inc/customize-pro/section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Foodylite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Foodylite_Customize_Section_Pro(
				$manager,
				'foodypro',
				array(
					'title'    => esc_html__( 'Get Foody Pro NOW!', 'foodylite' ),
					'pro_text' => esc_html__( 'Foody Pro', 'foodylite' ),
					'pro_url'  => 'https://www.pankogut.com/wordpress-themes/foodypro/?utm_source=customizer_button&utm_medium=wordpress_dashboard&utm_campaign=foodypro',
					'priority' => 1
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'foodylite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/customize-pro/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'foodylite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/customize-pro/customize-controls.css' );
	}
}

// Doing this customizer thang!
Foodylite_Customize::get_instance();
