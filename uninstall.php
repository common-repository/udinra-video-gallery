<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

udinra_uninstall_videogal_plugin();

function udinra_uninstall_videogal_plugin () {
	udinra_delete_videogal_options();
}

function udinra_delete_videogal_options () {
	udinra_video_gal_uninstall();
}

?>