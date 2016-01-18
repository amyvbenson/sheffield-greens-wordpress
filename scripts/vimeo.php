<?php
/*
Plugin Name: Vimeo embed plugin
Description: Allows the user to embed Vimeo movie clips by entering a shortcode ([vimeo]) into the post area.
*/

class lux_vimeo {
    function shortcode($atts, $content=null) {
		extract(shortcode_atts(array(
			'clip_id' 	=> '',
			'width' 	=> '650',
			'height' 	=> '510',
		), $atts));

		if (empty($clip_id) || !is_numeric($clip_id)) return '<!-- Vimeo: Invalid clip_id -->';
		if ($height && !$width) $width = intval($height * 16 / 9);
		if (!$height && $width) $height = intval($width * 9 / 16);

		return "<object width='$width' height='$height'><param name='allowfullscreen' value='true' />".
    			"<param name='allowscriptaccess' value='always' />".
    			"<param name='movie' value='http://vimeo.com/moogaloop.swf?clip_id=$clip_id&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1' />".
    			"<embed src='http://vimeo.com/moogaloop.swf?clip_id=$clip_id&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1' type='application/x-shockwave-flash' allowfullscreen='true' allowscriptaccess='always' width='$width' height='$height'></embed></object>.";
    }
}

add_shortcode('vimeo', array('lux_vimeo', 'shortcode'));

?>