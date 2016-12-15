<?php

/* ==========================================================================
   Remove adminbar
   ========================================================================== */

add_filter( 'show_admin_bar', '__return_false' );


/* ==========================================================================
   Funktioner og definationer
   ========================================================================== */

define('THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );



/* ==========================================================================
   Link to javascript
   ========================================================================== */

function ht_script_js() {

	global $wp_scripts;

	wp_register_script( 'html_5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script ( 'bootstrap_js', SCRIPTS . '/bootstrap.min.js', array('jquery'), '', true  );
	wp_enqueue_script ( 'hejtiger_js', SCRIPTS . '/hejtiger.js', array('jquery'), '', true );
	wp_enqueue_script( 'map_js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDV4-X2BGaTvNNBfUuk1mSZdwqZBLYLpVU', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'ht_script_js' );



 /* ==========================================================================
  theme default support
   ========================================================================== */

if ( ! function_exists( 'hejtiger_setup' ) ) {
	function hejtiger_setup() {

		/* post thumbnail support */
		add_theme_support( 'post-thumbnails' );

		/* Menuer */
		register_nav_menus(
   				array(
   					'main-menu' => __( 'Main Menu' )
   					)
   				);

	}
}

add_action ( 'after_setup_theme', 'hejtiger_setup' );


/* ==========================================================================
   google fonts
   ========================================================================== */

    function ht_custom_fonts() {

            
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Poppins|Muli');
            
            wp_enqueue_style( 'googleFonts');

            wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css', null, '4.0.1' );
        }
    
    add_action('wp_print_styles', 'ht_custom_fonts');


/* ==========================================================================
   widgets
   ========================================================================== */
function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of blog posts with a sidebar' );
wpt_create_widget( 'footer left', 'footer-left', 'Displays in the footer left side' );
wpt_create_widget( 'footer center', 'footer-center', 'Displays in the footer center' );
wpt_create_widget( 'footer right', 'footer-right', 'Displays in the footer right side' );



