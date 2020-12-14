<?php
/**
 * Plugin Name:     Force Collapse Admin Menu
 * Description:     This plugin collapses the admin menu and doesn't allow expanding it back.
 * Author:          Felipe Santos
 * Text Domain:     force-collapse-admin-menu
 * Version:         1.0.1
 *
 * @package         Force Collapse Admin Menu
 */

/**
 * Hide the collapse icon on the wp-admin navigation menu.
 *
 * @return void
 */
function fcam_hide_collapse_button() { echo "

<style>

	#collapse-button {
		display: none !important;
	} 

</style>

"; }

add_action('admin_head', 'fcam_hide_collapse_button');

/**
 * Add native WP 'folded' class on body that collapses the menu.
 *
 * @return void
 */
function fcam_collapse_menu() { echo "

<script type='text/javascript' > 

	document.body.classList.add('folded');

</script>

"; }

add_action('admin_footer', 'fcam_collapse_menu');