<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package foodylite
 */

if ( ! is_active_sidebar( 'sidebar-top' ) ) {
	return;
}
?>
	<div class="sidebar-top">
		<?php dynamic_sidebar( 'sidebar-top' ); ?>
	</div>