<?php
/**
 * Plugin Name: BuddyPress Keyboard Shortcuts
 * Description: @TODO
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI: https://github.com/NikV/BuddyPress-keyboard-shortcuts
 * License: GNU GPLv2+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function buddypress_keyboard_shortcuts_enqueue() {

	//Only appear if in the activity component
	if (  bp_is_activity_component()) {

		wp_enqueue_script( 'buddypress_activity_keyboard_shortcut', plugin_dir_url( __FILE__ ) . 'buddypress-activity-keyboard-shortcuts.js', array( 'jquery' ) );

	}

}
add_action('wp_enqueue_scripts','buddypress_keyboard_shortcuts_enqueue');