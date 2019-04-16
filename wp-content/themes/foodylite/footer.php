<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package foodylite
 */
?>

		</div><!-- #content -->

	</div><!-- .container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<?php get_sidebar('footer'); ?>
		
		<div class="site-footer-bottom">

			<div class="container">

				<div class="site-info">

					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'foodylite' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'foodylite' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'foodylite' ), 'FoodyLite', '<a href="https://www.pankogut.com/" rel="nofollow">PanKogut.com</a>' );
					?>

				</div><!-- .site-info -->

			</div>
		</div>

	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
