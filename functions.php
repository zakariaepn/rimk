<?php
/**
 * Rimk functions and definitions
 *
 * @package Rimk
 */

// Below define fucntion will be remove after complete the production.
if ( site_url() == "http://localhost/theme" ){
	define( "VERSION", time() );
}else{
	define( "VERSION", wp_get_theme()->get( "version" ));
}
//============================================================

define( 'RIMKTHEME_DIR', trailingslashit( get_template_directory() )) ;
define( 'RIMKTHEME_LINK', trailingslashit( get_template_directory_uri() ) );
if ( ! function_exists( 'rimktheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 */
function rimktheme_setup() {

	load_theme_textdomain( 'rimkony', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'rimkony' ),
			'bottom' => esc_html__( 'Bottom Menu', 'rimkony' )
		)
	);


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
			'rimkony_custom_background_args',
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
endif; // rimktheme_setup
add_action( 'after_setup_theme', 'rimktheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rimktheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rimktheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'rimktheme_content_width', 0 );

/**
 * Register widget area.
 */
function rimkony_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Blog', 'rimkony' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<div id="%1$s" class="single-item wow fadeInUp widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="item-title"><h4>',
			'after_title'   => '</div></h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area 1', 'rimkony' ),
			'id'            => 'footer-widget-area-1',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<div id="%1$s" class="single-item wow fadeInUp widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="item-title widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area 2', 'rimkony' ),
			'id'            => 'footer-widget-area-2',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<div id="%1$s" class="single-item wow fadeInUp widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="item-title widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area 3', 'rimkony' ),
			'id'            => 'footer-widget-area-3',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<div id="%1$s" class="single-item wow fadeInUp widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="item-title widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area 4', 'rimkony' ),
			'id'            => 'footer-widget-area-4',
			'description'   => esc_html__( 'Add widgets here.', 'rimkony' ),
			'before_widget' => '<div id="%1$s" class="single-item wow fadeInUp widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="item-title widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'rimkony_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rimkony_scripts() {
	
	// Rimk theme styles
	wp_enqueue_style( 'josefin-font', '//fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap' );
	wp_enqueue_style( 'font-awesome', RIMKTHEME_LINK . 'assets/css/all.min.css' );
	wp_enqueue_style( 'flaticon', RIMKTHEME_LINK . 'assets/font/flaticon.css' );
	wp_enqueue_style( 'bootstrap', RIMKTHEME_LINK . 'assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'menu', RIMKTHEME_LINK . 'assets/css/menu.css' );
	wp_enqueue_style( 'venobox', RIMKTHEME_LINK . 'assets/css/venobox.css' );
	wp_enqueue_style( 'magnific-popup', RIMKTHEME_LINK . 'assets/css/magnific-popup.css' );
	wp_enqueue_style( 'swiper-slider', RIMKTHEME_LINK . 'assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'scroll-animation', RIMKTHEME_LINK . 'assets/css/animate.css' );
	wp_enqueue_style( 'style', RIMKTHEME_LINK . 'assets/css/style.css' );
	wp_enqueue_style( 'responsive', RIMKTHEME_LINK . 'assets/css/responsive.css' );

	// Rimk theme scripts
	wp_enqueue_script( 'bootstrap', RIMKTHEME_LINK . 'assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0' ,true);   
	wp_enqueue_script( 'menu', RIMKTHEME_LINK . 'assets/plugins/menu.min.js', array('jquery'), VERSION ,true);   
	wp_enqueue_script( 'venobox', RIMKTHEME_LINK . 'assets/plugins/venobox.min.js', array('jquery'), '1.8.6' ,true);   
	wp_enqueue_script( 'megnific-popup', RIMKTHEME_LINK . 'assets/plugins/jquery.magnific-popup.min.js', array('jquery'), '1.1.0' ,true);   
	wp_enqueue_script( 'mixitup-popup', RIMKTHEME_LINK . 'assets/plugins/mixitup.min.js', array('jquery'), '3.3.1' ,true);   
	wp_enqueue_script( 'swiper-slider', RIMKTHEME_LINK . 'assets/plugins/swiper-bundle.min.js', array('jquery'), '6.1.2' ,true);  
	wp_enqueue_script( 'counterup-waypoint', RIMKTHEME_LINK . 'assets/plugins/waypoint.js', array('jquery'), '4.0.1' ,true);   
	wp_enqueue_script( 'counterup', RIMKTHEME_LINK . 'assets/plugins/jquery.counterup.min.js', array('jquery'), '1.0' ,true);   
	wp_enqueue_script( 'scroll-animation', RIMKTHEME_LINK . 'assets/plugins/wow.min.js', array('jquery'), VERSION ,true);   
	wp_enqueue_script( 'scroll-animation', RIMKTHEME_LINK . 'assets/plugins/wow.min.js', array('jquery'), '1.1.3' ,true);   
	wp_enqueue_script( 'script', RIMKTHEME_LINK . 'assets/js/script.js', array(), VERSION ,true);   


	// Default theme style with rtl
	wp_enqueue_style( 'rimk-default', get_stylesheet_uri(), array(), VERSION );
	wp_style_add_data( 'rimk-rtl', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rimkony_scripts' );

// Customizer additions.
//require RIMKTHEME_DIR . 'inc/customizer.php';

// Custom template tags for this theme.
require RIMKTHEME_DIR . 'inc/template-tags.php';
require RIMKTHEME_DIR . 'inc/latest-post-widget.php';
require RIMKTHEME_DIR . 'inc/rimk-category-widget.php';
require RIMKTHEME_DIR . 'inc/necessary-single.php';


function rimkony_customizer($wp_customize) {
	$wp_customize->add_section('section-name', array(
		'title' => 'Section Title',
		'priority' => 220,
	));
	$wp_customize->add_setting('setting-label-one', array(
		'default' => 'This is default value from setting'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'control-name', array(
		'label' => 'control-label',
		'section' => 'section-name',
		'settings' => 'setting-label-one'
	)) );
}
add_action('customize_register', 'rimkony_customizer');

