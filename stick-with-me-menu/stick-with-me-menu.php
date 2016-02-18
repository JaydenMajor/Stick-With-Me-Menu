<?php
/*
Plugin Name: Stick With Me Menu
Version: 1.0
Author: Jayden Major & Jason Ovalle
Author URI:  https://jaydenmajor.com/plugins
Description: This plugin makes the add pages section of the wordpress menu editor stay on screeen no matter how long your menu is.
Tags: Menu editor, menu, moves adding menu, wordpress admin,  Jayden Major & Jason Ovalle, Jayden Major, Jason Ovalle
Text Domain: stick-with-me-menu
Licence: GPLv3
Licence URI: http://www.gnu.org/licenses/gpl.html
*/
/*
* Adding css to admin pages.
*/
add_action( 'admin_enqueue_scripts', 'stickwithmemenu_scripts' );
function stickwithmemenu_scripts(){
	 wp_enqueue_style( plugin_dir_url( __FILE__ ) . 'assets/stick-with-me-menu.css' );
}
/*
add_settings_field(
	'stickwithmemenu_enabled',
	'Stick With Me Menu - Enabled',
	'stickwithmemenu_option',
	'general',
	'myprefix_settings-section-name',
	array( 'label_for' => 'stickwithmemenu_enabled' )
);
function stickwithmemenu_option($args){

}
*/
add_action( 'admin_init', 'stickwithmemenu_init' );
function stickwithmemenu_init(){
	register_setting('general',__('Stick With Me Menu - Enabled','stick-with-me-menu'),'stickwithmemenu_santize');
}
function stickwithmemenu_santize($input){
	if($input){
		return true;
	}
	else{
		return false;
	}
}
?>
