<?php

function udinra_videogal_slideshow_images($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
										  $udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
										  &$udinra_videogal_images_html,$udinra_videogal_provider) {
	$udinra_videogal_images_html = '';
	global $wp_embed;
	switch ($udinra_videogal_provider) {
		case 'vimeo':
			$udinra_youtube_front_url = 'https://www.vimeo.com/';
			break;
		default:
			$udinra_youtube_front_url = 'https://www.youtube.com/watch?v=';
			break;
	}
	
	for($udinra_videogal_counter = 1; $udinra_videogal_counter < 7 ; $udinra_videogal_counter++ ) {
		switch ($udinra_videogal_counter) {
			case 1:
				if ($udinra_videogal_source1 == '' || ctype_space($udinra_videogal_source1)) { } else {
					$udinra_videogal_source1 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source1) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source1) . '</div>';
				}
				break;
			case 2:
				if ($udinra_videogal_source2 == '' || ctype_space($udinra_videogal_source2)) { } else {
					$udinra_videogal_source2 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source2) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source2) . '</div>';
				}
				break;
			case 3:
				if ($udinra_videogal_source3 == '' || ctype_space($udinra_videogal_source3)) { } else {
					$udinra_videogal_source3 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source3) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source3) . '</div>';
				}
				break;
			case 4:
				if ($udinra_videogal_source4 == '' || ctype_space($udinra_videogal_source4)) { } else {
					$udinra_videogal_source4 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source4) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source4) . '</div>';
				}
				break;
			case 5:
				if ($udinra_videogal_source5 == '' || ctype_space($udinra_videogal_source5)) { } else {
					$udinra_videogal_source5 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source5) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source5) . '</div>';
				}
				break;
			case 6:
				if ($udinra_videogal_source6 == '' || ctype_space($udinra_videogal_source6)) { } else {
					$udinra_videogal_source6 = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source6) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_videogal_source6) . '</div>';
				}
				break;
			default:
				break;
		}
	}
}

function udinra_videogal_filmstrip_images($udinra_videogal_source1,$udinra_videogal_source2,$udinra_videogal_source3,
										  $udinra_videogal_source4,$udinra_videogal_source5,$udinra_videogal_source6,
										  &$udinra_videogal_images_html,&$udinra_videogal_dots_html,
										  $udinra_videogal_provider) {
	$udinra_videogal_images_html = '';
	$udinra_videogal_dots_html   = '';
	global $wp_embed;
	switch ($udinra_videogal_provider) {
		case 'vimeo':
			$udinra_youtube_front_url = 'https://www.vimeo.com/';
			break;
		default:
			$udinra_youtube_front_url = 'https://www.youtube.com/watch?v=';
			break;
	}

	for($udinra_videogal_counter = 1; $udinra_videogal_counter < 7 ; $udinra_videogal_counter++ ) {
		$udinra_youtube_temp_url = '';
		switch ($udinra_videogal_counter) {
			case 1:
				if ($udinra_videogal_source1 == '' || ctype_space($udinra_videogal_source1)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source1) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' .  
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%"' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source1,$udinra_videogal_provider) . '" />';
				}
				break;
			case 2:
				if ($udinra_videogal_source2 == '' || ctype_space($udinra_videogal_source2)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source2) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%"' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source2,$udinra_videogal_provider) . '" />';
				}
				break;
			case 3:
				if ($udinra_videogal_source3 == '' || ctype_space($udinra_videogal_source3)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source3) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%" ' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source3,$udinra_videogal_provider) . '" />';										
				}
				break;
			case 4:
				if ($udinra_videogal_source4 == '' || ctype_space($udinra_videogal_source4)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source4) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%" ' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source4,$udinra_videogal_provider) . '" />';
				}
				break;
			case 5:
				if ($udinra_videogal_source5 == '' || ctype_space($udinra_videogal_source5)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source5) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%" ' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source5,$udinra_videogal_provider) . '" />';
				}
				break;
			case 6:
				if ($udinra_videogal_source6 == '' || ctype_space($udinra_videogal_source6)) { } else {
					$udinra_youtube_temp_url = '[embed] ' . esc_url($udinra_youtube_front_url . $udinra_videogal_source6) . ' [/embed]';
					$udinra_videogal_images_html .= '<div class="UdinraAutoGalContainer' . 
													'" style="width:100%" >' . $wp_embed->run_shortcode($udinra_youtube_temp_url) . '</div>';
					$udinra_videogal_dots_html   .= '<img class="UdinraAutoGalDots w3-opacity w3-hover-opacity-off" onclick="UdinraSlideManCur(' . 	
													$udinra_videogal_counter . ')"  style="width:25%" ' . ' src="' .
													udinra_videogal_thumbnail_url($udinra_videogal_source6,$udinra_videogal_provider) . '" />';
				}
				break;
			default:
				break;
		}
	}
}

function udinra_videogal_thumbnail_url( $id ,$udinra_videogal_provider) {
	switch ($udinra_videogal_provider) {
		case 'vimeo':
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
			return $hash[0]['thumbnail_large'];  
		break;
		default:
			$maxres = 'http://img.youtube.com/vi/' . $id . '/maxresdefault.jpg';
			$response = wp_remote_head( $maxres );
			if ( !is_wp_error( $response ) && $response['response']['code'] == '200' ) {
				$result = $maxres;
			} else {
				$result = 'http://img.youtube.com/vi/' . $id . '/0.jpg';
			}
			return $result;
			break;
	}
}
	
/* How to get URL of current page to be used with social media in future
function udinra_videogal_get_url() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
*/

?>