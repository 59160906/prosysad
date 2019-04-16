<?php
/**
 * foodylite Theme Customizer: Settings
 *
 * @package foodylite
 */

/*
 * ## Loads the PHP file that generates the Customizer CSS for the front-end
 */
function foodylite_customizer_css() {
	require(get_template_directory().'/inc/options/customizer-css.php');
	wp_die();
}

/*
 * ## Enqueue the AJAX call to the dynamic Customizer CSS
 */
function foodylite_customizer_stylesheet() {
	wp_enqueue_style('customizer', esc_url( admin_url('admin-ajax.php').'?action=foodylite_customizer_css') );

}
add_action('wp_ajax_foodylite_customizer_css', 'foodylite_customizer_css');
add_action('wp_ajax_nopriv_foodylite_customizer_css', 'foodylite_customizer_css');

/*
 * ## IMPORTANT: Customizer CSS *must* be called _after_ the main stylesheet, to ensure that customizer-modified styles override the defaults.
 */
add_action( 'wp_enqueue_scripts', 'foodylite_customizer_stylesheet' );

/*
 * Customize Sanitization
 */
// Sanitize Select
function foodylite_sanitize_select( $input, $setting ){
         
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}

// Sanitice Checkbox
function foodylite_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}