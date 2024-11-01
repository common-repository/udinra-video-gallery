<?php
function udinra_videogal_button() {
		add_filter( 'mce_external_plugins', 'udinra_video_gal_plugin' );
		add_filter( 'mce_buttons', 'udinra_videogal_register_button' );
}
function udinra_video_gal_plugin( $plugin_array ) {
	$plugin_array['udinra_videogal_subscribe'] = plugins_url( 'js/udinra_videogal_button.js',dirname( __FILE__ ));
	return $plugin_array;
}
function udinra_videogal_register_button( $buttons ) {
	array_push( $buttons, "udinra_videogal_subscribe" );
	return $buttons;
}
?>