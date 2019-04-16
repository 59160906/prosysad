<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package foodylite
 */
	
if ( ! is_active_sidebar( 'footer-column-1' )
	&& ! is_active_sidebar( 'footer-column-2' )
	&& ! is_active_sidebar( 'footer-column-3' )
	) {
return;
}
?>

	<div class="container">
		<div class="footer-sidebar clear">
			<?php if ( is_active_sidebar( 'footer-column-1' ) ) : ?>
				<div id="footer-column-1" class="footer-widget" role="complementary">
					<?php dynamic_sidebar( 'footer-column-1' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
				<div id="footer-column-2" class="footer-widget" role="complementary">
					<?php dynamic_sidebar( 'footer-column-2' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-column-3' ) ) : ?>
				<div id="footer-column-3" class="footer-widget" role="complementary">
					<?php dynamic_sidebar( 'footer-column-3' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>
		</div><!-- #sidebar-footer -->
	</div><!-- .container -->