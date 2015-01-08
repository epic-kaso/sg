<?php
/**
 * Coeur functions
 * 
 * @package Coeur
 * @author Frenchtastic.eu
 */

// Setup
if ( ! function_exists( 'coeur_setup' ) ) :
function coeur_setup(){
    
    // Add Localization
    load_theme_textdomain('coeur', get_template_directory() . '/framework/languages');

    // Add Automatic RSS Support
    add_theme_support('automatic-feed-links');

    // Custom Background Support
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'f9f9f9',
        )

    );


    // Add Thumbnail Size
    add_theme_support( 'post-thumbnails' );

    /**
    * Support for custom header background
    *
    * @since 1.7.3
    */
    $coeur_header_args = array(
      'flex-width'    => true,
      'width'         => 1280,
      'flex-height'    => true,
      'height'        => 480,
    );
    add_theme_support( 'custom-header', $coeur_header_args);

    set_post_thumbnail_size( 938, 250, true );
    add_image_size('large-image', 9999, 9999, false);

    // Navigation Menus
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'coeur' ),
    ) );
    register_nav_menus( array(
    'mobile' => __( 'Mobile menu', 'coeur' ),
    ) );

    // Add Post Formats
    add_theme_support('post-formats', array(
      'quote', 
      'image', 
      'chat'
    ));

    // HTML5 Support
    add_theme_support( 'html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );

    // Content Width
    if(!isset($content_width)) $content_width = 908;

}
endif; // coeur_setup
add_action( 'after_setup_theme', 'coeur_setup' );

/**
* Enqueue scripts and stylesheets
*
* @author Frenchtastic.eu
* @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script
*/
function coeur_scripts() {

	global $wp_styles;

	// CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri() . "/framework/css/bootstrap.min.css", array(), '0.1', 'screen');
	wp_enqueue_style('blog', get_template_directory_uri() . "/framework/css/blog.css", array(), '0.1', 'screen');

	// Font Awesome
	wp_enqueue_style('font_awesome_css',
		get_template_directory_uri()."/framework/css/font-awesome.min.css", array(), '0.1', 'screen' );

	// Coeur JS
	wp_enqueue_script('coeur_js', get_template_directory_uri() . "/framework/js/coeur.js", array( 'jquery' ));

	// JavaScript
	wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/framework/js/bootstrap.min.js", array( 'jquery' ));

	// Conditional (if lt IE 9 )
  wp_enqueue_style( 'html5-shiv', get_stylesheet_directory_uri() . "/framework/js/html5shiv.min.js", array()  );
  $wp_styles->add_data( 'html5-shiv', 'conditional', 'lt IE 9' );

  // Conditional (if lt IE 9 )
  wp_enqueue_style( 'respond-js', get_stylesheet_directory_uri() . "/framework/js/respond.min.js", array()  );
  $wp_styles->add_data( 'respond-js', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action('wp_enqueue_scripts','coeur_scripts');

function coeur_admin_scripts() {
  // Admin JS
  wp_enqueue_script('admin_js', get_template_directory_uri() . "/framework/js/admin-js.js", array( 'jquery', 'customize-controls' ), false, true);
}
add_action( 'customize_controls_enqueue_scripts', 'coeur_admin_scripts' );

/**
* Register Sidebars
*
* @author Frenchtastic.eu
*/
function coeur_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'coeur' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the right.', 'coeur' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 1 (left)', 'coeur' ),
	    'id'            => 'footer-1',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h1 class="widget-title">',
	    'after_title'   => '</h1>',
    ));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 2 (center)', 'coeur' ),
	    'id'            => 'footer-2',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h1 class="widget-title">',
	    'after_title'   => '</h1>',
    ));
  	register_sidebar( array(
	    'name'          => __( 'Footer Widgets 3 (right)', 'coeur' ),
	    'id'            => 'footer-3',
	    'description'   => __( 'Widgets will appear in the footer area. To hide widgetized area in the footer simply remove all widgets from Footer 1, 2 and 3', 'coeur' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</aside>',
	    'before_title'  => '<h1 class="widget-title">',
	    'after_title'   => '</h1>',
    ));
}
add_action('widgets_init', 'coeur_widgets_init');

// Coeur Includes
require_once locate_template('/framework/customizer.php');
require_once locate_template('/framework/general.php');
require_once locate_template('comments.php');
require_once locate_template('/framework/wp_bootstrap_navwalker.php');