<?php
/*
 * Plugin Name: say-hello
 * Plugin URI: http://192.168.84.252/ || http://10.110.34.200/
 * Description:
 * Version: 1.0.0
 * Author: Luzumi
 */


if ( !defined('ABSPATH') ) {
	die;
}
/*
add_shortcode( "gruss", "greeting" );
function greeting( $attr ): void {
}*/

function ah_custom_js_file() {
	// Enqueue a custom JS file with jQuery as a dependency
	wp_enqueue_script('custom-js', '/wp-content/plugins/say-hello/JS/' . 'costum.js');
};

add_action('wp_enqueue_scripts', 'ah_custom_js_file');