<?php 
/*
Plugin Name: WP-ImageRotate
Plugin URI: http://wordpress.org/extend/plugins/wp-imagerotate/
Description: Due to memory leaks, Debian removed imagerotate() from php5-gd. If rotating does not work in your Wordpress image editor, this plugin will supply an alternative imagerotate() function. Other plugins also solve this issue, but we got timeouts when working with (very) large images, so this plugin does the same thing - but faster!
Author: alfreddatakillen
Version: 1.1
Author URI: http://www.klandestino.se/
License: GPLv2
*/

if (!function_exists('imagerotate')) {

	function imagerotate($img, $angle, $bgd_color, $ignore_transparent = 0) {
		$angle = (360 - intval($angle)) % 360; // we get the angle in counter-clockwise notation: -90° for a 90° clockwise rotation (thanks Leonhardt Wille)

		$w = imagesx($img);
		$h = imagesy($img);
		$maxx = $w - 1;
		$maxy = $h - 1;

		switch($angle) {
		case 90:
			$newimg = @imagecreatetruecolor($h, $w);
			for ($x = 0; $x < $w; $x++)
				for ($y = 0; $y < $h; $y++)
					imagecopy($newimg, $img, $maxy - $y, $x, $x, $y, 1, 1);
			break;
		case 180:
			$newimg = @imagecreatetruecolor($w, $h);
			for ($x = 0; $x < $w; $x++)
				for ($y = 0; $y < $h; $y++)
					imagecopy($newimg, $img, $maxx - $x, $maxy - $y, $x, $y, 1, 1);
			break;
		case 270:
			$newimg = @imagecreatetruecolor($h, $w);
			for ($x = 0; $x < $w; $x++)
				for ($y = 0; $y < $h; $y++)
					imagecopy($newimg, $img, $y, $maxx - $x, $x, $y, 1, 1);
			break;
		default:
			return false;
		}

		return $newimg;

	}

}

?>
