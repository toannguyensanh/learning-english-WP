<?php
/**
 * my-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my-theme
 */

if ( ! function_exists( 'theme_slug_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_slug_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on my-theme, use a find and replace
		 * to change 'theme-slug' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme-slug', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'theme-slug' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'theme_slug_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_slug_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_slug_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_slug_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme-slug' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme-slug' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_slug_scripts() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/jquery.js', array(), '2.1.1', true);
	}

	wp_enqueue_style('font-awesome', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/font-awesome.min.css', array(), '4.3.0');

	wp_enqueue_style('bootstrap-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/bootstrap.min.css', array(), '3.3.6');
	wp_enqueue_script('bootstrap-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/bootstrap.min.js', array(), '3.3.6', true);

	wp_enqueue_style('animate-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/animate.css', array(), '3.3.6');

	wp_enqueue_style('awesome-bootstrap-checkbox', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/awesome-bootstrap-checkbox.css', array(), null);

	wp_enqueue_style('chosen-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/chosen.css', array(), '1.1.0');
	wp_enqueue_script('chosen-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/chosen.jquery.js', array(), '1.1.0', true);

	wp_enqueue_style('datatables-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/datatables.min.css', array(), '1.1.0');
	wp_enqueue_script('datatables-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/datatables.min.js', array(), '1.1.0', true);

	wp_enqueue_style('icheck-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/icheck.css', array(), null);
	wp_enqueue_script('icheck-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/icheck.min.js', array(), null, true);

	wp_enqueue_style('toastr-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/toastr.min.css', array(), null);

	wp_enqueue_style('default-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/default.css', array(), null);

	wp_enqueue_script('audio-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/audio.min.js', array(), null, true);
	wp_enqueue_script('jasny-bootstrap-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/jasny-bootstrap.min.js', array(), '3.1.2', true);
	wp_enqueue_script('metisMenu-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/jquery.metisMenu.js', array(), '2.0.2', true);
	wp_enqueue_script('slimscroll-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/jquery.slimscroll.min.js', array(), '1.3.6', true);
	wp_enqueue_script('slimscroll-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/jquery.slimscroll.min.js', array(), '2.0.2', true);
	wp_enqueue_script('pace-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/pace.min.js', array(), '1.0.2', true);
	wp_enqueue_script('script-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/script.js', array(), null, true);

	wp_enqueue_style('app-style', trailingslashit(get_stylesheet_directory_uri()) . 'assets/css/app.css', array(), null);
	wp_enqueue_script('app-script', trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/app.js', array(), null, true);

}
add_action( 'wp_enqueue_scripts', 'theme_slug_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

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

require get_template_directory() . '/includes/custom-post-type.php';
require get_template_directory() . '/includes/hooks.php';
require get_template_directory() . '/includes/shortcodes.php';

// Body Class
add_filter('body_class', 'na_add_slug_body_class');
function na_add_slug_body_class($classes) {
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}

	if (!is_front_page() && !is_home()) {
		$classes[] = 'not-home';
	}

	return $classes;
}

add_filter('widget_text','do_shortcode');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page('Theme Options');
}