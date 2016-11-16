<?php
/*
Plugin Name: (Disabled) Friendly Adblock
Description: Show personnal and cool advert to users using Adblock :) Enjoy !
Version: 0.0.1
Author: Rubs019
License: GPLv2 or later
Text Domain: Friendly Adblock
*/


add_action('admin_menu', 'add_Module_Panel_Admin');
add_action('admin_enqueue_scripts', 'script_load');
add_action( 'wp_enqueue_scripts', 'script_load' );
add_action( 'wp_footer', 'index_popup');

if (!defined('MYPLUGIN_PLUGIN_NAME')){
	define('MYPLUGIN_PLUGIN_NAME', trim('Friendly Adblock'), '/');
}
function index_popup() {
	global $wpdb;

	$prefix = $table_name = $wpdb->prefix;

	$results = $wpdb->get_row("SELECT * FROM ".$prefix."plugins_fa LIMIT 0, 1");

	$title = stripslashes_deep($results->fa_title);
	$content = stripslashes_deep($results->fa_content);

	if($results === null) {
		echo "ERROR : Error select DB, please try to reactive your plugins [Issue 001]";
		return false;
	}
	var_dump($results);

	echo '<div id="popup" style="background-color: #'.$results->fa_bgcolor.';"><div id="pop-title"><span style="color:#'.$results->fa_color_title.'">'.$title.'</span></div><i id="pop-close" class="material-icons">close</i><div id="pop-content" style="color:#'.$results->fa_color_content.'">'.$content.'</div></div>';
}

function script_load($hook) {
	// Activation css/js sur page tableau-bord
	if ($hook === 'first_plugin_wordpress/app/admin_panel.php' or is_front_page()) {
		// Css
		wp_enqueue_style( 'style', esc_url( plugins_url( '/app/assets/css/style.css', __FILE__ ) ) );
		wp_enqueue_style( 'material_icons', esc_url( 'https://fonts.googleapis.com/icon?family=Material+Icons', __FILE__ ) );

		// JavaScript
		wp_enqueue_script( 'ads', esc_url( plugins_url( '/app/assets/js/ads.js', __FILE__ ) ) );
		wp_enqueue_script( 'initpop', esc_url( plugins_url( '/app/assets/js/initpop.js', __FILE__ ) ) );
		wp_enqueue_script( 'jscolor', esc_url( plugins_url( '/app/assets/js/jscolor.min.js', __FILE__ ) ), array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'popup', esc_url( plugins_url( '/app/assets/js/popup.js', __FILE__ ) ), array( 'jquery' ), '1.0', true );
	}
	return;
}

function add_Module_Panel_Admin(){
	$parent_slug = 'index.php';
	$page_title = 'Friendly Adblock';
	$menu_title = 'Friendly Adblock';
	$capability = 'manage_options';
	$menu_slug = 'first_plugin_wordpress/app/admin_panel.php';

	add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug);
}