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
add_action('admin_head', 'stickwithmemenu_style');
function stickwithmemenu_style() {
  echo '<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ) . '/assets/stick-with-me-menu.css" type="text/css" media="all" />';
}
?>
