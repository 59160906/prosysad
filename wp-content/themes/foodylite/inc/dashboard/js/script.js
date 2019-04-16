( function ( $ ) {
	'use strict';

	function tabs() {
		var $container = $( '.nav-tab-wrapper' ),
			$tabs = $container.find( '.nav-tab' ),
			$panes = $( '.hs-tab-pane' );

		$container.on( 'click', '.nav-tab', function ( e ) {
			e.preventDefault();

			$tabs.removeClass( 'nav-tab-active' );
			$( this ).addClass( 'nav-tab-active' );

			$panes.removeClass( 'hs-is-active' );
			$panes.filter( $( this ).attr( 'href' ) ).addClass( 'hs-is-active' );
		} );
	}

	// Auto activate tabs when DOM ready.
	$( tabs );
} ( jQuery ) );
