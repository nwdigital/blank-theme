<?php
/**
 * Main Theme Functions
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add a sidebar.
 */
function nwdigital_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'nwdigital_widgets_init' );


/**
 * Frontend Enqueue Scripts & Styles
 */
function nwdigital_enqueue_scripts() {

  wp_enqueue_style(
		'nwdigital-blank-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'nwdigital_blank',
		get_template_directory_uri() . '/assets/nwdigital.js',
		array('jquery'),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'nwdigital_blank',
		'nwDigitalObject',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'theme_url' => get_template_directory_uri(),
		)
	);

}
add_action('wp_enqueue_scripts', 'nwdigital_enqueue_scripts');
