<?php

/*

Plugin Name: Easy Tube

Plugin URI: http://www.ejump.co.uk/wordpress/easytube-plugin-for-wordpress/

Description: Plugin to easliy place YouTube objects in Wordpress Content

Date: 2007, March, 26

Author: Paul Bain

Author URI: http://www.paulbain.co.uk

Version: 0.2.2

*/

/*



Author: Paul Bain

Website: http://www.paulbain.co.uk



Copyright 2007 Paul Bain All Rights Reserved.



This software is distributed in the hope that it will be useful,

but WITHOUT ANY WARRANTY; without even the implied warranty of

MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.



*/

add_filter('the_content','ytube_content');

add_filter('the_content','gvideo_content');


function ytube_content($content) {

    $regex = '/\[youtube:(.*?)]/i';

	preg_match_all( $regex, $content, $matches );

	for($x=0; $x<count($matches[0]); $x++)

	{

		$parts = explode(" ", $matches[1][$x]);

		if(count($parts) > 1)

		{

			$vid= explode('=',$parts[0],2);

			$vid = $vid[1];

			$width = $parts[1];

			if(count($parts) > 2)

			{

				$height = $parts[2];

			}

			else

			{

				$height = "";

			}

			// $replace = '<object class="embed" width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" data="http://www.youtube.com/v/'.$vid.'"><param name="movie" value="http://www.youtube.com/v/'.$vid.'" /><param name="wmode" value="transparent" /><em>You need a flashplayer enabled browser to view this YouTube video</em></object>';

			$replace = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allowfullscreen></iframe>';

		}

		else

		{

			$vid= explode('=',$matches[1][$x]);

			$vid = $vid[1];

			// $replace = '<object class="embed" width="650" height="510" type="application/x-shockwave-flash" data="http://www.youtube.com/v/'.$vid.'"><param name="wmode" value="transparent" /><param name="movie" value="http://www.youtube.com/v/'.$vid.'" /><em>You need a flashplayer enabled browser to view this YouTube video</em></object>';

			$replace = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allowfullscreen></iframe>';

		}



		$content = str_replace($matches[0][$x], $replace, $content);

	}



	return $content;



}



function gvideo_content($content)

{

    $regex = '/\[googlevideo:(.*?)]/i';

	preg_match_all( $regex, $content, $matches );

	for($x=0; $x<count($matches[0]); $x++)

	{

		$parts = explode(" ", $matches[1][$x]);

		if(count($parts) > 1)

		{

			$vid= explode('=',$parts[0]);

			$vid = $vid[1];

			$width = $parts[1];

			if(count($parts) > 2)

			{

				$height = $parts[2];

			}

			else

			{

				$height = "";

			}

			$replace = '<object class="embed" width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" data="http://video.google.com/googleplayer.swf?docId='.$vid.'">v<param name="movie" value="http://video.google.com/googleplayer.swf?docId='.$vid.'" /><em>You need to have flashplayer enabled to watch this Google video</em></object>';

		}

		else

		{

			$vid= explode('=',$matches[1][$x]);

			$vid = $vid[1];

			$replace = '<object class="embed" width="650" height="510" type="application/x-shockwave-flash" data="http://video.google.com/googleplayer.swf?docId='.$vid.'"><param name="wmode" value="transparent" /<param name="movie" value="http://video.google.com/googleplayer.swf?docId='.$vid.'" /><em>You need to have flashplayer enabled to watch this Google video</em></object>';

		}



		$content = str_replace($matches[0][$x], $replace, $content);

	}



	return $content;

}

?>