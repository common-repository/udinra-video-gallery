<?php

function udinra_video_gal_uninstall(){
}

function udinra_videogal_slideshow($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
									$udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
									$udinra_videogal_provider){
	$udinra_videogal_html           = '';
	$udinra_videogal_media_html    = '';
	$udinra_videogal_html_container = '<div class="w3-content w3-display-container" style="width:100%">';
	
	udinra_videogal_slideshow_images($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
									 $udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
									 $udinra_videogal_images_html,$udinra_videogal_provider);
	
	
	$udinra_videogal_html =  $udinra_videogal_html_container . $udinra_videogal_images_html . '</div>' ;
	return $udinra_videogal_html;
}

function udinra_videogal_filmstrip($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
									$udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
									$udinra_videogal_provider){
	$udinra_videogal_html           = '';
	$udinra_videogal_images_html    = '';
	$udinra_videogal_dots_html      = '';
	$udinra_videogal_html_container = '<div class="w3-content" style="width:100%">';
	$udinra_videogal_nav_container  = '<div class="UdinraAutoGalMenu" style="width:100%">';

	udinra_videogal_filmstrip_images($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
									$udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
									$udinra_videogal_images_html,$udinra_videogal_dots_html,$udinra_videogal_provider);
	
	$udinra_videogal_html =  $udinra_videogal_html_container . $udinra_videogal_images_html . $udinra_videogal_nav_container .
							$udinra_videogal_dots_html . '</div>' . '</div>' ;
	return $udinra_videogal_html;
}

?>