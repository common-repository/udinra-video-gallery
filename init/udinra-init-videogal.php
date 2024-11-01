<?php


function udinra_videogal_shortcode( $udinra_videogal_atts ) {

    $udinra_videogal_parameters = shortcode_atts( array(
									'type'      => 'filmstrip', 
									'provider'  => 'youtube',
									'source1'   => '',
									'source2'   => '',
									'source3'   => '',
									'source4'   => '',
									'source5'   => '',
									'source6'   => ''
									), $udinra_videogal_atts );

	$udinra_video_gal_html = '';
	
	switch ($udinra_videogal_parameters["type"]) {
		case 'filmstrip':
			$udinra_video_gal_html = udinra_videogal_filmstrip($udinra_videogal_parameters["source1"],$udinra_videogal_parameters["source2"],
															 $udinra_videogal_parameters["source3"],$udinra_videogal_parameters["source4"],
															 $udinra_videogal_parameters["source5"],$udinra_videogal_parameters["source6"],
															 $udinra_videogal_parameters["provider"]);
			break;
		case 'slideshow':
			$udinra_video_gal_html = udinra_videogal_slideshow($udinra_videogal_parameters["source1"],$udinra_videogal_parameters["source2"],
															 $udinra_videogal_parameters["source3"],$udinra_videogal_parameters["source4"],
															 $udinra_videogal_parameters["source5"],$udinra_videogal_parameters["source6"],
															 $udinra_videogal_parameters["provider"]);
			break;
		default:
			break;
	}

	udinra_videogal_script($udinra_videogal_parameters["type"]);
	udinra_videogal_css($udinra_videogal_parameters["type"]);
	
	return $udinra_video_gal_html;
	
}

function udinra_videogal_script($udinra_videogal_type) {
	wp_enqueue_script( 'udinra-videogal-responsive', plugins_url( 'js/udinra_videogal_responsive.js',dirname( __FILE__ )),NULL,NULL, false );
	switch ($udinra_videogal_type) {
		case 'filmstrip':
			wp_enqueue_script( 'udinra-videogal-js', plugins_url( 'js/udinra_videogal_filmstrip.js',dirname( __FILE__ )),NULL,NULL, false );
			break;
		case 'slideshow':
			wp_enqueue_script( 'udinra-videogal-js', plugins_url( 'js/udinra_videogal_slideshow.js',dirname( __FILE__ )),NULL,NULL, false );
			break;
		default:
			break;
	}
}

function udinra_videogal_css($udinra_videogal_type) {
	wp_enqueue_style( 'udinra-videogal-css', plugins_url( 'css/udstyle.css',dirname( __FILE__ )));
	switch ($udinra_videogal_type) {
		case 'filmstrip':
			wp_enqueue_style( 'udinra-videogal-filmstrip-css', plugins_url( 'css/UdinraVideoGalFilmStrip.css',dirname( __FILE__ )));					
			break;
		case 'slideshow':
			wp_enqueue_style( 'udinra-videogal-slideshow-css', plugins_url( 'css/UdinraVideoGalSlideShow.css',dirname( __FILE__ )));					
			break;
		default:
				break;
 	}
}
	
add_shortcode( 'udinra_videogal', 'udinra_videogal_shortcode' );

?>