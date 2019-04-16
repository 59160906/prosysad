/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// START HERE: COLORS
	// Primary Color
    wp.customize( 'foodylite_start_here_primary_color', function( value ) {
        value.bind( function( to ) {
            $( 'body' ).css( 'color', to );
        } );
    } );
	// Secondary Color
	wp.customize( 'foodylite_start_here_secondary_color', function( value ) {
		value.bind( function( to ) {
			$( 'a:hover' ).css('color', to );
		} );
	} );
	// Accent Color
	wp.customize( 'foodylite_start_here_accent_color', function( value ) {
		value.bind( function( to ) {
			$( 'a, a:visited, a:focus, a:active' ).css('color', to );
		} );
	} );
	// Social Icons Color
	wp.customize( 'foodylite_start_here_social_color', function( value ) {
		value.bind( function( to ) {
			$( '.widget-social a' ).css('color', to );
		} );
	} );
	// Social Icons Hover Color
	wp.customize( 'foodylite_start_here_social_hover_color', function( value ) {
		value.bind( function( to ) {
			$( '.widget-social a:hover' ).css('color', to );
		} );
	} );
	// Button Color
    wp.customize( 'foodylite_start_here_button_color', function( value ) {
        value.bind( function( to ) {
            $( '.button' ).css( 'background-color', to );
            $( 'button' ).css( 'background-color', to );
            $( 'input[type="button"]' ).css( 'background-color', to );
            $( 'input[type="reset"]' ).css( 'background-color', to );
            $( 'input[type="submit"]' ).css( 'background-color', to );
            $( '.mc4wp-form input[type="submit"]' ).css( 'background-color', to );
        } );
    } );
	// Button Hover Color
    wp.customize( 'foodylite_start_here_button_hover_color', function( value ) {
        value.bind( function( to ) {
            $( '.button:hover,button:hover,input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover,.mc4wp-form input[type="submit"]:hover' ).css( 'background-color', to );
        } );
    } );
	// Button Text Color
    wp.customize( 'foodylite_start_here_button_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.button,button,input[type="button"],input[type="reset"],input[type="submit"],.mc4wp-form input[type="submit"]' ).css( 'color', to );
        } );
    } );
	// Button Text Hover Color
    wp.customize( 'foodylite_start_here_button_text_hover_color', function( value ) {
        value.bind( function( to ) {
            $( '.button:hover,button:hover,input[type="button"]:hover,input[type="reset"]:hover,input[type="submit"]:hover,.mc4wp-form input[type="submit"]:hover' ).css( 'color', to );
        } );
    } );
	// BACKGROUND
    // Container Color
    wp.customize( 'foodylite_background_container_color', function( value ) {
        value.bind( function( to ) {
            $( '.container' ).css( 'background-color', to );
        } );
    } );

	// HEADER
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	// Site Title & Tagline Colors
	wp.customize( 'foodylite_header_site_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_header_site_title_hover_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a:hover' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_header_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).css('color', to );
		} );
	} );
	// Menu Colors
	wp.customize( 'foodylite_header_menu_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_header_menu_hover_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a:hover' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_header_menu_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-header, .site-header .container, button.menu-toggle, button.menu-toggle:hover' ).css('background-color', to );
		} );
	} );
	// FOOTER
	// Footer Colors
	wp.customize( 'foodylite_footer_widget_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer, .site-footer .container, .footer-widget .widget-title' ).css('background-color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_widget_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer, .site-footer .container, .footer-widget .widget-title' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_widget_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer a, .site-footer a:visited' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_widget_link_hover_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer a:hover, .site-footer a:focus, .site-footer a:active ' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_bottom_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer-bottom, .site-footer-bottom .container' ).css('background-color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_bottom_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer-bottom, .site-footer-bottom .container' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_bottom_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer-bottom a, .site-footer-bottom a:visited' ).css('color', to );
		} );
	} );
	wp.customize( 'foodylite_footer_bottom_link_hover_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer-bottom a:hover, .site-footer-bottom a:focus, .site-footer-bottom a:active ' ).css('color', to );
		} );
	} );
} )( jQuery );