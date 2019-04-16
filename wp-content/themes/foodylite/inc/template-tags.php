<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package foodylite
 */

if ( ! function_exists( 'foodylite_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function foodylite_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$byline = sprintf(
		/* translators: %s: post author. */
		esc_html_x( 'by %s', 'post author', 'foodylite' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $time_string . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK

}
endif;

if ( ! function_exists( 'foodylite_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function foodylite_entry_comment() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'foodylite' ), esc_html__( '1 Comment', 'foodylite' ), esc_html__( '% Comments', 'foodylite' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'foodylite' ), '<span class="edit-link">', '</span>' );
}
endif;

if ( ! function_exists( 'foodylite_entry_cat' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function foodylite_entry_cat() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'foodylite' ) );
		if ( $categories_list && foodylite_categorized_blog() ) {
			printf( '<div class="cat-links">' . '%1$s' . '</div>', $categories_list ); // WPCS: XSS OK
		}
	}
}
endif;

if ( ! function_exists( 'foodylite_entry_tag' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function foodylite_entry_tag() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'foodylite' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . '%1$s' . '</span>', $tags_list ); // WPCS: XSS OK
		}
	}
}
endif;

/**
 * Archive Page Title
 */

function foodylite_archive_title ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

}
add_filter( 'get_the_archive_title', 'foodylite_archive_title');

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function foodylite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'foodylite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'foodylite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so foodylite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so foodylite_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in foodylite_categorized_blog.
 */
function foodylite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'foodylite_categories' );
}
add_action( 'edit_category', 'foodylite_category_transient_flusher' );
add_action( 'save_post',     'foodylite_category_transient_flusher' );
