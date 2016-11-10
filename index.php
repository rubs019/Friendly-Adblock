<?php
/*
Plugin Name: (Disabled) Friendly Adblock
Description: Show personnal and cool advert to users using Adblock :) Enjoy !
Version: 0.0.1
Author: Rubs019
License: GPLv2 or later
Text Domain: Friendly Adblock
*/

add_action('admin_enqueue_scripts', 'script_load');
add_action('admin_menu', 'add_Module_Panel_Admin');

function script_load($hook) {
	// Activation css/js sur page tableau-bord
	if ($hook != 'first_plugin_wordpress/controller/admin_panel.php') {return;}

	// STYLE
	wp_enqueue_style( 'style', esc_url( plugins_url( 'assets/css/style.css', __FILE__ )));
	wp_enqueue_style( 'material_icons', esc_url('https://fonts.googleapis.com/icon?family=Material+Icons', __FILE__ ));

	// JavaScript
	wp_enqueue_script( 'ads', esc_url( plugins_url( 'assets/js/ads.js', __FILE__ ) ));
	wp_enqueue_script( 'jscolor', esc_url( plugins_url( 'assets/js/jscolor.min.js', __FILE__ ) ), array('jquery'), '1.0', true );
	wp_enqueue_script( 'popup', esc_url( plugins_url( 'assets/js/popup.js', __FILE__ ) ), array('jquery'), '1.0', true );
}

function add_Module_Panel_Admin(){
	$parent_slug = 'index.php';
	$page_title = 'Friendly Adblock';
	$menu_title = 'Friendly Adblock';
	$capability = 'manage_options';
	$menu_slug = 'first_plugin_wordpress/controller/admin_panel.php';

	add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug);
}