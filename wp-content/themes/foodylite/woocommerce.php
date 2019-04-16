<?php
/**
 * Woocommerce Template
 *
 * @package foodylite
 */

get_header(); ?>

	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
