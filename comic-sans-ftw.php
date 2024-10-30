<?php
/*
Plugin Name: Comic Sans FTW
Plugin URI: http://cnjcbs.com/wordpress-plugins/comic-sans-ftw/
Description: Any Comic Sans lovers out here? This plugin gives you a complete Comic Sans website, right away! Obviously, this plugin is pun intended.
Author: Coen Jacobs
Version: 2.0
Author URI: http://cnjcbs.com
*/

function comic_sans_ftw_css() {
	echo "
	<style type='text/css'>
	* {
		font-family: \"Comic Sans MS\", cursive !important;
	}
	</style>
	";
}

add_action('admin_head', 'comic_sans_ftw_css');
add_action('wp_head', 'comic_sans_ftw_css');

?>
