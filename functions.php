<?php
/**
 * @package lean
 */

define("THEME_URI", get_template_directory_uri() );
define("THEME_DIR", get_template_directory() );

require 'inc/setup.php';

function lean_scripts() {

  wp_enqueue_style( 'lean-amazeui', THEME_URI . '/assets/css/amazeui.css');
	wp_enqueue_style( 'lean-common', THEME_URI. '/assets/css/common.min.css');

	wp_enqueue_script( 'lean-jquery', THEME_URI . '/assets/js/jquery-2.1.0.js', array(), '20170416', true );
	wp_enqueue_script( 'lean-tether', THEME_URI . '/assets/js/amazeui.js', array(), '20170416', true );

	//wp_enqueue_script( 'navigation', THEME_URI . '/assets/js/navigation.js', array(), '20120206', true );
	//wp_enqueue_script( 'skip-link-focus-fix', THEME_URI . '/assets/js/skip-link-focus-fix.js', array(), '20170416', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lean_scripts' );

?>
