<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package foodylite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php foodylite_entry_cat(); ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
		<?php foodylite_entry_comment(); ?>

	</header><!-- .entry-header -->

    <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
        <div class="entry-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
            </a>
        </div>
    <?php endif; ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php foodylite_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
