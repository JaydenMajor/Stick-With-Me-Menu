<?php
/*
Plugin Name: Stick With Me Menu
Version: 1.1
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
	$value = get_option('stickwithmemenu_enabled', 'true' );
	if($value != 'false'){
		wp_register_style('stickwithmecss',plugin_dir_url( __FILE__ ) .'/assets/stick-with-me-menu.css');
    		wp_enqueue_style('stickwithmecss');
	}
}
add_action( 'admin_enqueue_scripts', 'stickwithmemenu_style' );

add_action('admin_init','stickwithmemenu_init');
function stickwithmemenu_init(){
	register_setting('general','stickwithmemenu_enabled');
	add_settings_field('stickwithmemenu_enabled_setting',__('Stick With Me Menu'),'stickwithmemenu_displayform','general','default',array( 'label_for' => 'stickwithmemenu_enabled' ));
}
function stickwithmemenu_displayform($args){
	$value = get_option('stickwithmemenu_enabled', 'true' );
	?>
	<label for="<?php echo $args['label_for']; ?>"><input type="radio" id="<?php echo $args['label_for']; ?>" name="<?php echo $args['label_for']; ?>" value="true" <?php if($value != 'false'){echo 'checked';}?>/> <?php _e('Enabled','stick-with-me-menu'); ?></label>&nbsp;
	<label for="<?php echo $args['label_for']; ?>_off"><input type="radio" id="<?php echo $args['label_for']; ?>_off" name="<?php echo $args['label_for']; ?>" value="false" <?php if($value == 'false'){echo 'checked';}?>/> <?php _e('Disabled','stick-with-me-menu'); ?></label>
	<?php
}
?>
