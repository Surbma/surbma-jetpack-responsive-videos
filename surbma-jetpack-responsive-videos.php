<?php

/*
Plugin Name: Surbma | Jetpack Responsive Videos
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adds Jetpack's responsive video support to your website.

Version: 2.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-jetpack-responsive-videos
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_jetpack_responsive_videos_init() {
	load_plugin_textdomain( 'surbma-jetpack-responsive-videos', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_jetpack_responsive_videos_init' );

function surbma_jetpack_responsive_videos_setup() {
    add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'surbma_jetpack_responsive_videos_setup' );
