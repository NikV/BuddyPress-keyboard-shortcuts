<?php
/**
 * Plugin Name: BuddyPress Shift+Enter to Publish activity
 * Description: Use Shift+Enter when you finish writing activity in BuddyPress and watch it be published!
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */


function buddypress_activity_with_shift_enter_enqueue() {

	if (  bp_is_activity_component()) {

		wp_enqueue_script( 'buddypress_activity_keyboard_shortcut', plugin_dir_url( __FILE__ ) . 'buddypress-activity-shift-enter.js', array( 'jquery' ) );

	}





}
add_action('wp_enqueue_scripts','buddypress_activity_with_shift_enter_enqueue');



