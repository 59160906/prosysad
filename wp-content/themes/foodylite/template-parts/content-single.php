<?php
/**
 * @package foodylite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php foodylite_entry_cat(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php foodylite_entry_comment(); ?>

		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foodylite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php foodylite_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
