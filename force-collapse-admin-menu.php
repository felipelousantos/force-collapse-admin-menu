<?php
/**
 * @package Force Collapse Admin Menu
 * @version 1.0.0
 */
/*
Plugin Name: Force Collapse Admin Menu
Description: This plugin collapses the admin menu and doesn't allow expanding it back.
Author: Felipe Santos
Version: 1.0.0
Author URI: https://felipels.com/
*/


function hide_collapse_button() { echo "

<style>

#collapse-button {
	display: none !important;
} 

</style>

"; }

add_action('admin_head', 'hide_collapse_button');

function collapse_menu() { echo "

<script type='text/javascript' > 

document.body.classList.add('folded');

</script>

"; }

add_action('admin_footer', 'collapse_menu');

function plugin_deactivation() { echo "

<script type='text/javascript' > 

document.body.classList.remove('folded');

</script>

"; }

register_deactivation_hook( __FILE__, 'plugin_deactivation' );