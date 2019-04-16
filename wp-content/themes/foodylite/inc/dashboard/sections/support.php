<?php
/**
 * Support section.
 *
 * @package FoodyLite
 */

?>
<div id="support" class="hs-tab-pane">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php esc_html_e( 'Contact Support', 'foodylite' ); ?></h3>
			<p><?php esc_html_e( 'Our priority support is only available for pro version. Upgrade to FoodyPro now to get access to our excellent support as well as variety of useful features', 'foodylite' ); ?></p>
			<a class="button button-primary" href='<?php echo esc_url( "https://www.pankogut.com/wordpress-themes/foodypro/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>' target="_blank"><?php esc_html_e( 'Upgrade Now', 'foodylite' ); ?></a>
		</div>
		<div class="col">
			<h3><?php esc_html_e( 'More Themes From Us', 'foodylite' ); ?></h3>
			<p>
				<?php
					// Translators: theme name.
					echo esc_html( sprintf( __( 'If you like %s, you might want to see another beautiful themes from ', 'foodylite' ),  $this->theme->name ) );
				?>
				<a href="<?php echo esc_url( "https://www.pankogut.com/wordpress-themes/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>"><?php esc_html_e( 'pankogut', 'foodylite' ); ?></a>
				<?php esc_html_e( 'We build high quality WordPress themes that are well designed and simple to set up. Check them out here!', 'foodylite' ); ?>
			</p>
			<a class="button button-primary" href='<?php echo esc_url( "https://www.pankogut.com/wordpress-themes/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>' target="_blank"><?php esc_html_e( 'Visit PanKogut', 'foodylite' ); ?></a>
		</div>
	</div>
</div>
