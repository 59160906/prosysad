<?php
/**
 * foodylite functions and definitions
 *
 * @package foodylite
 */

if ( ! isset( $content_width ) ) $content_width = 1140;

if ( ! function_exists( 'foodylite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foodylite_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foodylite, use a find and replace
	 * to change 'foodylite' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'foodylite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Menu', 'foodylite' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'gallery', 'video', 'audio'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foodylite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// enable feature custom header
	add_theme_support( 'custom-header' );
    
    // woocommerce support
    add_theme_support( 'woocommerce' );
}
endif; // foodylite_setup
add_action( 'after_setup_theme', 'foodylite_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function foodylite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foodylite' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Top Bar Area for Social Icons', 'foodylite' ),
		'id'            => 'sidebar-top',
		'description'   => __( 'Move here the widget Social Links (FoodyLite) and delete the title Social Links. Each Social Links should have http://', 'foodylite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'foodylite' ),
		'id'            => 'footer-column-1',
		'description'   => __( 'Sidebar Footer Column 1', 'foodylite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'foodylite' ),
		'id'            => 'footer-column-2',
		'description'   => __( 'Sidebar Footer Column 2', 'foodylite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'foodylite' ),
		'id'            => 'footer-column-3',
		'description'   => __( 'Sidebar Footer Column 3', 'foodylite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Archives Sidebar', 'foodylite' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'It shows up only on archives page like Categories and Tags', 'foodylite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'foodylite_widgets_init' );

/**
 * Custom Editor Style
 *
 */
function foodylite_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'foodylite_add_editor_styles' );

/**
 * Enqueue scripts and styles.
 */
function foodylite_scripts() {

	wp_enqueue_style( 'foodylite-style', get_stylesheet_uri() );
	wp_style_add_data( 'foodylite-style', 'rtl', 'replace' );

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );

	wp_enqueue_script( 'jquery-imageloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array('jquery'), '4.1.3', true );
	wp_enqueue_script( 'jquery-retina', get_template_directory_uri() . '/js/retina.js', array('jquery'), '1.3.0', true );
	wp_enqueue_script( 'foodylite-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'foodylite-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foodylite_scripts' );

/**
 * Add notice after active theme.
 */
function foodylite_notice() {
	global $pagenow;
	if ( is_admin() && isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) {
	?>
	<div class="updated notice notice-success is-dismissible">
		<p>
			<?php
			// Translators: welcome page.
			echo wp_kses_post( sprintf( __( 'Thank you for choosing Foody Lite. To get started, visit our <a href="%s">welcome page</a>.', 'foodylite' ), esc_url( admin_url( 'themes.php?page=foodylite' ) ) ) );
			?>
		</p>
		<p>
			<a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=foodylite' ) ); ?>"><?php esc_html_e( 'Get started with Foody Lite', 'foodylite' ); ?></a>
		</p>
	</div>
	<?php
	}
}
add_action( 'admin_notices', 'foodylite_notice' );

/**
 * Load dashboard
 */
require get_template_directory() . '/inc/dashboard/class-hs-dashboard.php';
$dashboard = new Foodylite_Dashboard;

/**
 * Add "pro" link to the customizer
 *
 */
require get_template_directory() . '/inc/customize-pro/class-customize.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Include the TGM_Plugin_Activation class.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function foodylite_register_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'WP Recipe Maker',
			'slug'      => 'wp-recipe-maker',
			'required'  => false,
		),
		
		array(
			'name'      => 'Contact Form by WPForms',
			'slug'      => 'wpforms-lite',
			'required'  => false,
		),
		
		array(
			'name'      => 'Jetpack',
			'slug'      => 'jetpack',
			'required'  => false,
		),

		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'foodylite',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'foodylite_register_required_plugins' );

/**
 * Add Google Fonts
 */
function foodylite_add_google_fonts() {

wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,300i,400,400i,700,700i|Cormorant+Garamond:400,400i,700,700i');
	wp_enqueue_style( 'foodylite-googleFonts');
}
add_action('wp_print_styles', 'foodylite_add_google_fonts');

/**
 * Tag Cloud Sizes
 */
function foodylite_set_tag_cloud_sizes($args) {
	$args['smallest'] = 8;
	$args['largest'] = 18;
return $args; 
}
add_filter('widget_tag_cloud_args','foodylite_set_tag_cloud_sizes');

/**
 * Add to scroll top
 */
function foodylite_scroll_to_top() {
?>
<a href="#top" class="smoothup" title="<?php echo esc_attr( __( 'Back to top', 'foodylite' ) ); ?>"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
</a>
<?php
}
add_action('wp_footer', 'foodylite_scroll_to_top');

/**
 * Returns a "Read more" link for excerpts
 *
 */
function foodylite_excerpt_more( $more ) {
	if (is_admin()) return $more;
	return sprintf('<div class="more-link-wrap"><a class="more-link button" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Continue Reading', 'foodylite' ) . '</a></div>');
}
add_filter( 'excerpt_more', 'foodylite_excerpt_more' );

/**
 * Woocommerce: Change number or products per row to 3
 */ 
if (!function_exists('foodylite_loop_columns')) {
	function foodylite_loop_columns() {
		return 3; // 3 products per row
	}
}
add_filter('loop_shop_columns', 'foodylite_loop_columns');

/**
 * Woocommerce: Change number of related products on product page
 */ 
function foodylite_woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'foodylite_related_products_args' );
  function foodylite_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

/**
 * WooCommerce Gallery
 */
function foodylite_woo_gallery() {
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'foodylite_woo_gallery' );

/**
 * Posts per page on Archive Page
 */
function foodylite_archive_posts( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 60 );
    }
}
add_action( 'pre_get_posts', 'foodylite_archive_posts' );

/**
 * Set the WPForms ShareASale ID.
 *
 * @param string $shareasale_id The the default ShareASale ID.
 *
 * @return string $shareasale_id
 */
function foodylite_wpforms_shareasale_id( $shareasale_id ) {
	
	// If this WordPress installation already has an WPForms ShareASale ID
	// specified, use that.
	if ( ! empty( $shareasale_id ) ) {
		return $shareasale_id;
	}
	
	// Define the ShareASale ID to use.
	// This should be your ShareASale affiate ID, see https://cl.ly/3H1v093A252f.
	$shareasale_id = '1845472';
	
	// This WordPress installation doesn't have an ShareASale ID specified, so 
	// set the default ID in the WordPress options and use that.
	update_option( 'wpforms_shareasale_id', $shareasale_id );
	
	// Return the ShareASale ID.
	return $shareasale_id;
}
add_filter( 'wpforms_shareasale_id', 'foodylite_wpforms_shareasale_id' );