<?php
/*
Plugin Name: Udinra Video Gallery
Plugin URI: https://udinra.com/downloads/video-gallery-pro-wordpress-plugin
Description: Fastest way to create Gallery from your YouTube and Vimeo Videos.
Author: Udinra
Version: 1.0.0
Author URI: https://udinra.com
*/

function Udinra_VideoGallery() {
	include 'lib/udinra_videogal_html.php';
}

function udinra_video_gal_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra Video Gallery', 'Udinra Video Gallery', 'manage_options', basename(__FILE__), 'Udinra_VideoGallery');
	}
}

function udinra_videogal_admin_notice() {
	global $current_user ;
	$user_id = $current_user->ID;
	if ( ! get_user_meta($user_id, 'udinra_videogal_admin_notice') ) {
		echo '<div class="notice notice-info"><p>'; 
		printf(__('Facebook Videos , Lightbox Support and more with Pro version.<a href="https://udinra.com/downloads/video-gallery-pro-wordpress-plugin">Know More</a> | <a href="%1$s">Hide Notice</a>'), '?udinra_videogal_admin_ignore=0');
		echo "</p></div>";
	}
}

function udinra_videogal_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['udinra_videogal_admin_ignore']) && '0' == $_GET['udinra_videogal_admin_ignore'] ) {
		add_user_meta($user_id, 'udinra_videogal_admin_notice', 'true', true);
	}
}

function udinra_videogal_update() {
	$udinra_videogal_cap = apply_filters( 'udinra_videogal_button_cap', 'edit_posts' );
	if ( current_user_can( $udinra_videogal_cap ) ) {
		udinra_videogal_button();
	}
}
 
function udinra_videogal_deact() {
	remove_action('admin_menu','udinra_video_gal_admin');	
	remove_action('admin_notices', 'udinra_videogal_admin_notice');
	remove_action('admin_init', 'udinra_videogal_admin_ignore');
	remove_action( 'init', 'udinra_videogal_update' );
}

function udinra_videogal_admin_style($hook) {
	if($hook == 'settings_page_udinra-video-gallery') {
		wp_enqueue_style( 'udinra_video_gal_admin_style', plugins_url('css/udstyle.css', __FILE__) );	
    }
}

function udinra_videogal_settings_plugin_link( $links, $file ) 
{
    if ( $file == plugin_basename(dirname(__FILE__) . '/udinra-video-gallery.php') ) 
    {
        $in = '<a href="options-general.php?page=udinra-video-gallery">' . __('Settings','udvideogal') . '</a>';
        array_unshift($links, $in);
   }
    return $links;
}

include 'init/udinra-init-videogal.php';
include 'lib/udinra-videogal-visual-editor.php';
include 'db/udinra-videogal-call-func.php';
include 'db/udinra-videogal-db-func.php';

register_deactivation_hook(__FILE__, 'udinra_videogal_deact');

add_action('admin_menu','udinra_video_gal_admin');	
add_action('admin_notices', 'udinra_videogal_admin_notice');
add_action('admin_init', 'udinra_videogal_admin_ignore');
add_action( 'init', 'udinra_videogal_update' );

add_action( 'admin_enqueue_scripts', 'udinra_videogal_admin_style' );
add_filter( 'plugin_action_links', 'udinra_videogal_settings_plugin_link', 10, 2 );

?>
