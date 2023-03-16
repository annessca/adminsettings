<?php
/**
 * OG Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OG_Custom
 */
require_once( 'company-settings/company-settings.php' );
if ( ! function_exists( 'og_custom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function og_custom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CT Custom, use a find and replace
		 * to change 'ct-custom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ct-custom', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ct-custom' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ct_custom_custom_background_args', array(
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
add_action( 'after_setup_theme', 'og_custom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function og_custom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'og_custom_content_width', 640 );
}
add_action( 'after_setup_theme', 'og_custom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function og_custom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'og-custom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'og-custom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'og_custom_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function og_custom_scripts() {
	wp_enqueue_style( 'og-custom-main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_style( 'og-custom-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0-alpha.2' );

	//wp_enqueue_script( 'og-custom-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.12.4', true );

	wp_enqueue_script( 'og-custom-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'og_custom_scripts' );

function og_custom_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	} 
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
} 
add_filter( 'wp_title', 'og_custom_wp_title', 10, 2 );


function og_custom_homepage_settings(){
	?>
	<div class="form-wrapper">
		<h1>Homepage Setting</h1>
		<form method="post" action="options.php">
			<?php 
				settings_fields("profile");
				do_settings_sections("profile-details");
				submit_button()
			?>
		</form>
	</div>
	<?php
}

function og_custom_linkedin() { 
	?>
	<input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
	<?php 
}

function og_custom_facebook() { 
	?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
	<?php 
}

function og_custom_twitter() { 
	?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
	<?php 
}

function og_custom_pinterest() { 
	?>
	<input type="text" name="pinterest" id="pinterest" value="<?php echo get_option('pinterest'); ?>" />
	<?php 
}

function og_custom_address() { 
	?>
	<input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
	<?php 
}

function og_custom_telephone() { 
	?>
	<input type="text" name="telephone" id="telephone" value="<?php echo get_option('telephone'); ?>" />
	<?php 
}

function og_custom_fax() { 
	?>
	<input type="text" name="fax" id="fax" value="<?php echo get_option('fax'); ?>" />
	<?php 
}


function og_custom_settings_setup() {
	add_settings_section('profile', 'Company Profile', null, 'profile-details');
	add_settings_field('twitter', 'Twitter URL', 'og_custom_twitter', 'profile-details', 'profile');
	add_settings_field('linkedin', 'LinkedIn URL', 'og_custom_linkedin', 'profile-details', 'profile');
	add_settings_field('facebook', 'Facebook URL', 'og_custom_facebook', 'profile-details', 'profile');
	add_settings_field('pinterest', 'Pinterest URL', 'og_custom_pinterest', 'profile-details', 'profile');
	add_settings_field('telephone', 'Telephone Number', 'og_custom_telephone', 'profile-details', 'profile');
	add_settings_field('fax', 'Fascimile Number', 'og_custom_fax', 'profile-details', 'profile');
	add_settings_field('address', "Address", 'og_custom_address', 'profile-details', 'profile');
	
	register_setting('profile', 'twitter');
	register_setting('profile', 'linkedin');
	register_setting('profile', 'facebook');
	register_setting('profile', 'pinterest');
	register_setting('profile', 'telephone');
	register_setting('profile', 'fax');
	register_setting('profile', 'address');

}
add_action( 'admin_init', 'og_custom_settings_setup' );


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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
