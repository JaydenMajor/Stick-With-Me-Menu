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
function stickwithmemenu_style() {
	wp_register_style('stickwithmecss',plugin_dir_url( __FILE__ ) .'/assets/stick-with-me-menu.css');
    wp_enqueue_style('stickwithmecss');
}
add_action( 'admin_enqueue_scripts', 'stickwithmemenu_style' );
?>
