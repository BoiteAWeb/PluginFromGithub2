<?php
/*
Plugin Name: PluginFromGithub
Author: Julio Potier
*/

add_action( 'wp_footer', '___wp_footer', 11 );
function ___wp_footer(){
	global $wp_version;
	printf( '<p>%s Willy</p>', $wp_version );
}
?>
