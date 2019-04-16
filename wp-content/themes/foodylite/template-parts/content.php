<?php
/**
 * @package foodylite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<?php foodylite_entry_cat(); ?>

			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		</header><!-- .entry-header -->
    
        <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
	        <div class="entry-thumbnail">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<?php the_post_thumbnail(); ?>
	            </a>
	        </div>
        <?php endif; ?>

		<div class="entry-content">
				
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'foodylite' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
				?>
			
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