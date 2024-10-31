<?php
/*
Plugin Name: Responsive Attention Box
Description: Responsive Attention Box  is a plugin that helps push important messages onto the screen and your users.Images and jQuery have been used to enhance the User Experience. You can easily display custom texts, Twitter posts RSS feeds etc .
Version: 1.0
Author: Bledar Ramo
Author URI: http://coveredwpservices.com/
License: GPL2

    Copyright 2012  Bledar Ramo  (email: serviceramo@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



add_action('init', 'register_script');
function register_script() {
    wp_register_style( 'new_style', plugins_url('/css/common.css', __FILE__), false, '1.0.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
   wp_enqueue_style( 'new_style' );
}






	/****************************
	NOTIFICATIONS BOX
	****************************/
	
	function notification( $atts, $content = null ) {
		extract(shortcode_atts(array(	
			'style' => ''
		), $atts));
		$out = "<label class='$style'>$content</label>";
		return $out;
	}
	add_shortcode('label', 'notification');









add_action('template_redirect', 'add_my_script');

function add_my_script() {
	wp_enqueue_script('my-script', plugins_url('js/alert.js', __FILE__), array('jquery'), '1.0', true);
}





?>