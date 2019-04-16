<?php
/**
 * foodylite Theme Customizer: Options
 *
 * @package foodylite
 */

function foodylite_customizer_options( $wp_customize ) {
    /*--------------------------------------------------------------
        Read Now
    --------------------------------------------------------------*/
    $wp_customize->add_section('read_more_section', array(
        'priority' => 2,
        'title' => __('Read Now', 'foodylite'),
    ) );
    
    $wp_customize->add_setting('read_more', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control(new Foodylite_Read_More($wp_customize, 'read_more', array(
        'section' => 'read_more_section',
        'settings' => 'read_more',
    ) ) );

    /*--------------------------------------------------------------
        # Panels
    --------------------------------------------------------------*/
    // START HERE
    $wp_customize->add_panel( 'foodylite_start_here_panel', array(
        'title' => __('Start Here (PanKogut)', 'foodylite'),
        'description' => __('Set your container width, colors and Google Analytics.', 'foodylite'),
        'priority' => 10,
    ) );

    // BACKGROUND
    $wp_customize->add_panel( 'foodylite_background_panel', array(
        'title' => __('Background (PanKogut)', 'foodylite'),
        'description' => __('Background Color and Image.', 'foodylite'),
        'priority' => 20,
    ) );

    // HEADER
    $wp_customize->add_panel( 'foodylite_header_panel', array(
        'title' => __('Header (PanKogut)', 'foodylite'),
        'description' => __('You can customize the header style.', 'foodylite'),
        'priority' => 40,
    ) );

    // FOOTER
    $wp_customize->add_panel( 'foodylite_footer_panel', array(
        'title' => __('Footer (PanKogut)', 'foodylite'),
        'description' => __('You can customize the Footer.', 'foodylite'),
        'priority' => 80,
    ) );

    /*--------------------------------------------------------------
        # Sections
    --------------------------------------------------------------*/
    // START HERE
    // Colors
    $wp_customize->add_section( 'foodylite_start_here_colors' , array(
        'title' => __( 'Colors', 'foodylite' ),
        'description' => __('Change the colors of your website.', 'foodylite'),
        'priority' => 20,
        'panel' => 'foodylite_start_here_panel',
    ) );

    // BACKGROUND
    // Background Color
    $wp_customize->add_section( 'colors' , array(
        'title' => __('Background Color', 'foodylite'),
        'priority'  => 10,
        'panel' => 'foodylite_background_panel',
    ));

    // Background Image (Rename)
    $wp_customize->add_section( 'background_image' , array(
        'title' => __('Background Image', 'foodylite'),
        'priority'  => 20,
        'panel' => 'foodylite_background_panel',
    ));

    // Container Color
    $wp_customize->add_section( 'foodylite_background_container' , array(
        'title' => __( 'Container Color', 'foodylite' ),
        'priority'  => 30,
        'panel' => 'foodylite_background_panel',
    ) );

    // HEADER
    // Move Site Identity to Header Panel
    $wp_customize->add_section( 'title_tagline' , array(
        'title'     => __('Site Identity', 'foodylite'),
        'priority'  => 10,
        'panel' => 'foodylite_header_panel',
    ));
    
    // Move Header Image to Header Panel
    $wp_customize->add_section( 'header_image' , array(
        'title'     => __('Header Image', 'foodylite'),
        'priority'  => 20,
        'panel' => 'foodylite_header_panel',
    ));

    // Colors
    $wp_customize->add_section( 'foodylite_header_colors' , array(
        'title' => __( 'Colors', 'foodylite' ),
        'priority' => 20,
        'panel' => 'foodylite_header_panel',
    ) );

    // FOOTER: Colors
    $wp_customize->add_section( 'foodylite_footer_colors' , array(
        'title' => __( 'Colors', 'foodylite' ),
        'priority' => 10,
        'panel' => 'foodylite_footer_panel',
    ) );

    /*--------------------------------------------------------------
        # Options
    --------------------------------------------------------------*/
    // START HERE: COLORS
    // Primary Color
    $wp_customize->add_setting( 'foodylite_start_here_primary_color', array(
        'default' => '#303030',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_primary_color', array(
        'label' => __( 'Primary Color', 'foodylite' ),
        'priority' => 10,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_primary_color',
    ) ) );

    // Secondary Color
    $wp_customize->add_setting( 'foodylite_start_here_secondary_color', array(
        'default' => '#a3a3a3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_secondary_color', array(
        'label' => __( 'Secondary Color', 'foodylite' ),
        'priority' => 20,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_secondary_color',
    ) ) );

    // Accent Color
    $wp_customize->add_setting( 'foodylite_start_here_accent_color', array(
        'default' => '#abcee2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_accent_color', array(
        'label' => __( 'Accent Color', 'foodylite' ),
        'priority' => 30,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_accent_color',
    ) ) );

    // Social Color
    $wp_customize->add_setting( 'foodylite_start_here_social_color', array(
        'default' => '#2f2f2f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_social_color', array(
        'label' => __( 'Social Icons Color', 'foodylite' ),
        'priority' => 40,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_social_color',
    ) ) );

    // Social Hover Color
    $wp_customize->add_setting( 'foodylite_start_here_social_hover_color', array(
        'default' => '#A3A3A3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_social_hover_color', array(
        'label' => __( 'Social Icons Hover Color', 'foodylite' ),
        'priority' => 50,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_social_hover_color',
    ) ) );

    // Button Color
    $wp_customize->add_setting( 'foodylite_start_here_button_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_button_color', array(
        'label' => __( 'Button Color', 'foodylite' ),
        'priority' => 60,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_button_color',
    ) ) );

    // Button Hover Color
    $wp_customize->add_setting( 'foodylite_start_here_button_hover_color', array(
        'default' => '#abcee2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_button_hover_color', array(
        'label' => __( 'Button Hover Color', 'foodylite' ),
        'priority' => 70,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_button_hover_color',
    ) ) );

    // Button Text Color
    $wp_customize->add_setting( 'foodylite_start_here_button_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_button_text_color', array(
        'label' => __( 'Button Text Color', 'foodylite' ),
        'priority' => 80,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_button_text_color',
    ) ) );

    // Button Text Hover Color
    $wp_customize->add_setting( 'foodylite_start_here_button_text_hover_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_start_here_button_text_hover_color', array(
        'label' => __( 'Button Text Hover Color', 'foodylite' ),
        'priority' => 90,
        'section' => 'foodylite_start_here_colors',
        'settings' => 'foodylite_start_here_button_text_hover_color',
    ) ) );

    // BACKGROUND
    // Container Color
    $wp_customize->add_setting( 'foodylite_background_container_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_background_container_color', array(
        'label' => __( 'Container Color', 'foodylite' ),
        'priority' => 30,
        'section' => 'foodylite_background_container',
        'settings' => 'foodylite_background_container_color',
    ) ) );

    // HEADER: SITE IDENTITY
    // Site Title Color
    $wp_customize->add_setting( 'foodylite_header_site_title_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_site_title_color', array(
        'label' => __( 'Site Title Color', 'foodylite' ),
        'priority' => 10,
        'section' => 'title_tagline',
        'settings' => 'foodylite_header_site_title_color',
    ) ) );

    // Site Title Hover Color
    $wp_customize->add_setting( 'foodylite_header_site_title_hover_color', array(
        'default' => '#a3a3a3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_site_title_hover_color', array(
        'label' => __( 'Site Title Hover Color', 'foodylite' ),
        'priority' => 20,
        'section' => 'title_tagline',
        'settings' => 'foodylite_header_site_title_hover_color',
    ) ) );

    // Tagline Color
    $wp_customize->add_setting( 'foodylite_header_tagline_color', array(
        'default' => '#a3a3a3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_tagline_color', array(
        'label' => __( 'Tagline Color', 'foodylite' ),
        'priority' => 30,
        'section' => 'title_tagline',
        'settings' => 'foodylite_header_tagline_color',
    ) ) );

    // HEADER: COLORS
    // menu link color
    $wp_customize->add_setting( 'foodylite_header_menu_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_menu_color', array(
        'label' => __( 'Menu Color', 'foodylite' ),
        'priority' => 10,
        'section' => 'foodylite_header_colors',
        'settings' => 'foodylite_header_menu_color',
    ) ) );

    // menu link hover color
    $wp_customize->add_setting( 'foodylite_header_menu_hover_color', array(
        'default' => '#a3a3a3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_menu_hover_color', array(
        'label' => __( 'Menu Hover Color', 'foodylite' ),
        'priority' => 20,
        'section' => 'foodylite_header_colors',
        'settings' => 'foodylite_header_menu_hover_color',
    ) ) );

    // menu background color
    $wp_customize->add_setting( 'foodylite_header_menu_bg_color', array(
        'default' => '#eaeaea',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_menu_bg_color', array(
        'label' => __( 'Background Color', 'foodylite' ),
        'priority' => 30,
        'section' => 'foodylite_header_colors',
        'settings' => 'foodylite_header_menu_bg_color',
    ) ) );

    // search icon color
    $wp_customize->add_setting( 'foodylite_header_menu_search_color', array(
        'default' => '#2F2F2F',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_header_menu_search_color', array(
        'label' => __( 'Search Icon Color', 'foodylite' ),
        'priority' => 40,
        'section' => 'foodylite_header_colors',
        'settings' => 'foodylite_header_menu_search_color',
    ) ) );

    // FOOTER: Colors
    // Widget Background Color
    $wp_customize->add_setting( 'foodylite_footer_widget_bg_color', array(
        'default' => '#eaeaea',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_widget_bg_color', array(
        'label' => __( 'Widget Background Color', 'foodylite' ),
        'priority' => 10,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_widget_bg_color',
    ) ) );

    // Widget Text Color
    $wp_customize->add_setting( 'foodylite_footer_widget_text_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_widget_text_color', array(
        'label' => __( 'Widget Text Color', 'foodylite' ),
        'priority' => 20,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_widget_text_color',
    ) ) );

    // Widget Link Color
    $wp_customize->add_setting( 'foodylite_footer_widget_link_color', array(
        'default' => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_widget_link_color', array(
        'label' => __( 'Widget Link Color', 'foodylite' ),
        'priority' => 30,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_widget_link_color',
    ) ) );

    // Widget Link Hover Color
    $wp_customize->add_setting( 'foodylite_footer_widget_link_hover_color', array(
        'default' => '#cccccc',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_widget_link_hover_color', array(
        'label' => __( 'Widget Link Hover Color', 'foodylite' ),
        'priority' => 40,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_widget_link_hover_color',
    ) ) );

    // Bottom Background Color
    $wp_customize->add_setting( 'foodylite_footer_bottom_bg_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_bottom_bg_color', array(
        'label' => __( 'Bottom Background Color', 'foodylite' ),
        'priority' => 50,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_bottom_bg_color',
    ) ) );

    // Bottom Text Color
    $wp_customize->add_setting( 'foodylite_footer_bottom_text_color', array(
        'default' => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_bottom_text_color', array(
        'label' => __( 'Bottom Text Color', 'foodylite' ),
        'priority' => 60,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_bottom_text_color',
    ) ) );

    // Bottom Link Color
    $wp_customize->add_setting( 'foodylite_footer_bottom_link_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_bottom_link_color', array(
        'label' => __( 'Bottom Link Color', 'foodylite' ),
        'priority' => 70,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_bottom_link_color',
    ) ) );

    // Bottom Link Hover Color
    $wp_customize->add_setting( 'foodylite_footer_bottom_link_hover_color', array(
        'default' => '#cccccc',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'=>'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foodylite_footer_bottom_link_hover_color', array(
        'label' => __( 'Bottom Link Hover Color', 'foodylite' ),
        'priority' => 80,
        'section' => 'foodylite_footer_colors',
        'settings' => 'foodylite_footer_bottom_link_hover_color',
    ) ) );
}
add_action('customize_register', 'foodylite_customizer_options');

/**
 * Customizer Apply CSS to Head
 */
if ( ! function_exists( 'foodylite_customizer_options_css' ) ) :

    function foodylite_customizer_options_css() {
        if ( get_theme_mod('foodylite_start_here_primary_color') || 
             get_theme_mod('foodylite_start_here_secondary_color') || 
             get_theme_mod('foodylite_start_here_accent_color') || 
             get_theme_mod('foodylite_start_here_social_color') || 
             get_theme_mod('foodylite_start_here_social_hover_color') || 
             get_theme_mod('foodylite_start_here_button_color') || 
             get_theme_mod('foodylite_start_here_button_hover_color') || 
             get_theme_mod('foodylite_start_here_button_text_color') || 
             get_theme_mod('foodylite_start_here_button_text_hover_color') || 
             get_theme_mod('foodylite_background_container_color') || 
             get_theme_mod('foodylite_header_site_title_color') || 
             get_theme_mod('foodylite_header_site_title_hover_color') || 
             get_theme_mod('foodylite_header_tagline_color') || 
             get_theme_mod('foodylite_header_menu_color') || 
             get_theme_mod('foodylite_header_menu_hover_color') || 
             get_theme_mod('foodylite_header_menu_bg_color') || 
             get_theme_mod('foodylite_header_menu_search_color') || 
             get_theme_mod('foodylite_footer_widget_bg_color') || 
             get_theme_mod('foodylite_footer_widget_text_color') || 
             get_theme_mod('foodylite_footer_widget_link_color') || 
             get_theme_mod('foodylite_footer_bottom_bg_color') || 
             get_theme_mod('foodylite_footer_bottom_text_color') || 
             get_theme_mod('foodylite_footer_bottom_link_color') || 
             get_theme_mod('foodylite_footer_bottom_link_hover_color')
        ) { 
        ?>
            /* START HERE: COLORS */
            /* Primary Color */
            body { 
                color: <?php echo esc_attr( get_theme_mod('foodylite_start_here_primary_color', '#303030') ); ?>;
            }

            /* Secondary Color */
            a:hover {
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_secondary_color', '#a3a3a3') ); ?>;
            }

            /* Accent Color */
            a,
            a:visited,
            a:focus,
            a:active  {
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_accent_color', '#abcee2') ); ?>;
            }

            .cat-links {
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_accent_color', '#abcee2') ); ?>;
            }

            /* Social Icons Color */
            .widget-social a {
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_social_color', '#2f2f2f') ); ?> !important;
            }

            /* Social Icons Hover Color */
            .widget-social a:hover {
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_social_hover_color', '#A3A3A3') ); ?> !important;
            }

            /* Button Colors */
            .button,
            button,
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            .mc4wp-form input[type="submit"],
            .jetpack_subscription_widget input[type=submit] {
                background: <?php esc_attr( get_theme_mod('foodylite_start_here_button_color', '#000000') ); ?>;
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_button_text_color', '#ffffff') ); ?> !important;
                border-color: <?php esc_attr( get_theme_mod('foodylite_start_here_button_color', '#000000') ); ?>;
            }

            /* Button Hover Colors */
            .button:hover,
            button:hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            input[type="submit"]:hover,
            .mc4wp-form input[type="submit"]:hover,
            .jetpack_subscription_widget input[type=submit]:hover {
                background: <?php esc_attr( get_theme_mod('foodylite_start_here_button_hover_color', '#abcee2') ); ?>;
                color: <?php esc_attr( get_theme_mod('foodylite_start_here_button_text_hover_color', '#000000') ); ?> !important;
                border-color: <?php esc_attr( get_theme_mod('foodylite_start_here_button_hover_color', '#abcee2') ); ?>;
            }

            /* BACKGROUND */
            /* Container Color */
            .container { 
                background-color: <?php esc_attr( get_theme_mod('foodylite_background_container_color', '#ffffff') ); ?>;
            }

            /* HEADER: SITE TITLE COLORS */
            .site-title a,
            .site-title a:visited {
                color: <?php esc_attr( get_theme_mod('foodylite_header_site_title_color', '#000000') ); ?>;
            }

            .site-title a:hover,
            .site-title a:active {
                color: <?php esc_attr( get_theme_mod('foodylite_header_site_title_hover_color', '#a3a3a3') ); ?>;
            }

            .site-description {
                color: <?php esc_attr( get_theme_mod('foodylite_header_tagline_color', '#a3a3a3') ); ?>;
            }

            /* HEADER: COLORS */
            .main-navigation a,
            button.menu-toggle {
                color: <?php esc_attr( get_theme_mod('foodylite_header_menu_color', '#000000') ); ?> !important;
            }

            .main-navigation a:hover,
            button.menu-toggle:hover {
                color: <?php esc_attr( get_theme_mod('foodylite_header_menu_hover_color', '#a3a3a3') ); ?> !important;
            }

            .site-header,
            .site-header .container,
            button.menu-toggle,
            button.menu-toggle:hover {
                background-color: <?php esc_attr( get_theme_mod('foodylite_header_menu_bg_color', '#eaeaea') ); ?>;
            }

            .search-top .site-search:before {
                color: <?php esc_attr( get_theme_mod('foodylite_header_menu_search_color', '#2F2F2F') ); ?>;
            }

            /* FOOTER: COLORS */
            .site-footer,
            .site-footer .container,
            .footer-widget .widget-title {
              background-color: <?php esc_attr( get_theme_mod('foodylite_footer_widget_bg_color', '#eaeaea') ); ?>;
              color: <?php esc_attr( get_theme_mod('foodylite_footer_widget_text_color', '#000000') ); ?>;
            }

            .site-footer a,
            .site-footer a:visited {
              color: <?php esc_attr( get_theme_mod('foodylite_footer_widget_link_color', '#666666') ); ?>;
            }

            .site-footer a:hover,
            .site-footer a:focus,
            .site-footer a:active  {
              color: <?php esc_attr( get_theme_mod('foodylite_footer_widget_link_hover_color', '#cccccc') ); ?>;
            }

            .site-footer-bottom,
            .site-footer-bottom .container {
              background-color: <?php esc_attr( get_theme_mod('foodylite_footer_bottom_bg_color', '#000000') ); ?>;
              color: <?php esc_attr( get_theme_mod('foodylite_footer_bottom_text_color', '#666666') ); ?>;
            }

            .site-footer-bottom a,
            .site-footer-bottom a:visited {
              color: <?php esc_attr( get_theme_mod('foodylite_footer_bottom_link_color', '#ffffff') ); ?>;
            }

            .site-footer-bottom a:hover,
            .site-footer-bottom a:focus,
            .site-footer-bottom a:active  {
              color: <?php esc_attr( get_theme_mod('foodylite_footer_bottom_link_hover_color', '#cccccc') ); ?>;
            }
        <?php
    }
}
endif;