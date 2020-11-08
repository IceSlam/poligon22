<?php
/**
 * poligon22 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package poligon22
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

if ( ! function_exists( 'poligon22_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function poligon22_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on poligon22, use a find and replace
		 * to change 'poligon22' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'poligon22', get_template_directory() . '/languages' );

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

				add_theme_support('menus');

				register_nav_menus(
					array(
						' headerMenu ' => esc_html__( 'Шапка', 'poligon22' )
					)
				);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'poligon22_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)

		);

	}
endif;
add_action( 'after_setup_theme', 'poligon22_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function poligon22_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'poligon22_content_width', 640 );
}
add_action( 'after_setup_theme', 'poligon22_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function poligon22_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'poligon22' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'poligon22' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'poligon22_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function poligon22_scripts() {
	wp_enqueue_style( 'poligon22-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'Rubik-font', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
	wp_enqueue_style( 'FiraSans-font', 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
	wp_enqueue_style( 'FontAwesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', array(), 5.15);
	wp_enqueue_style( 'MDBootstrap-style', get_template_directory_uri() . '/assets/css/mdb.min.css', array(), 5.1 );
	wp_enqueue_style( 'FancyBox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), 3.5 );
	wp_enqueue_style( 'UIKit-style', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), 3.5 );
	wp_enqueue_style( 'Main-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'Media-style', get_template_directory_uri() . '/assets/css/media.css', array(), _S_VERSION );
	wp_enqueue_style( 'AliansLogo-style', get_template_directory_uri() . '/assets/css/alians.min.css', array(), _S_VERSION );
	wp_style_add_data( 'poligon22-style', 'rtl', 'replace' );

	wp_enqueue_script( 'poligon22-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.3.5.1.min.js', array(), 3.5, true );
	wp_enqueue_script( 'FancyBox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), 3.5, true );
	wp_enqueue_script( 'MDBootstrap', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), 5.1, true );
	wp_enqueue_script( 'UIKit', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), 3.5, true );
	wp_enqueue_script( 'UIKit-Icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array(), 3.5, true );
	wp_enqueue_script( 'Poligon22-Scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'poligon22_scripts' );

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

/* Custom logo in adminbar */

function poligon22_custom_logo() {
echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	display:inline-block;
	background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/poligon_logo.png) !important;
	background-position: 0 0;
	width:20px !important;
	height: 20px !important;
	color:rgba(0, 0, 0, 0);
	-webkit-background-size: cover;
	background-size: cover;

	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: center;
	}
	</style>
';
}
add_action('wp_before_admin_bar_render', 'poligon22_custom_logo');

function remove_footer_admin () {
	echo '<p>Тема Полигон 2.0 разработана <a href="https://iceslam.ru" target="_blank">IceSlam</a> в компании <a href="https://alianscompany.ru" target="_blank">Альянс+</a>. Работает на WordPress</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
// File does not exist... return an error.
return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function mytheme_customize_register( $wp_customize ) {

$wp_customize->add_section(

    'data_site_section',

    array(
        'title' => 'Контактная информация',
        'capability' => 'edit_theme_options',
        'description' => "Контактная информация компании"
    )
);

$wp_customize->add_setting(

    'poligon22_vk',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_vk_control',

    array(
        'type' => 'text',
        'label' => "ВКонтакте",
        'section' => 'data_site_section',

        'settings' => 'poligon22_vk'
    )
);

$wp_customize->add_setting(

    'poligon22_youtube',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_youtube_control',

    array(
        'type' => 'text',
        'label' => "YouTube",
        'section' => 'data_site_section',

        'settings' => 'poligon22_youtube'
    )
);

$wp_customize->add_setting(

    'poligon22_ok',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_ok_control',

    array(
        'type' => 'text',
        'label' => "Одноклассники",
        'section' => 'data_site_section',

        'settings' => 'poligon22_ok'
    )
);

$wp_customize->add_setting(

    'poligon22_instagram',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_instagram_control',

    array(
        'type' => 'text',
        'label' => "Instagram",
        'section' => 'data_site_section',

        'settings' => 'poligon22_instagram'
    )
);

$wp_customize->add_setting(

    'poligon22_email',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_email_control',

    array(
        'type' => 'text',
        'label' => "E-Mail",
        'section' => 'data_site_section',

        'settings' => 'poligon22_email'
    )
);

$wp_customize->add_setting(

    'poligon22_phone',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_phone_control',

    array(
        'type' => 'text',
        'label' => "Телефон",
        'section' => 'data_site_section',

        'settings' => 'poligon22_phone'
    )
);

$wp_customize->add_setting(

    'poligon22_address',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_address_control',

    array(
        'type' => 'text',
        'label' => "Адрес",
        'section' => 'data_site_section',

        'settings' => 'poligon22_address'
    )
);

$wp_customize->add_setting(

    'poligon22_years',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'poligon22_years_control',

    array(
        'type' => 'text',
        'label' => "Количество лет на рынке",
        'section' => 'data_site_section',

        'settings' => 'poligon22_years'
    )
);

}
add_action( 'customize_register', 'mytheme_customize_register' );

require_once('wp_bootstrap_pagination.php');

function customize_wp_bootstrap_pagination($args) {

    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';

    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');
