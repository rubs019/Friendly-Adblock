<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 14:14
 */

function update_table($wpdb, $param) {

	$updated = $wpdb->update( 'wp_plugins_fa', array( 'fa_title' => $param['popup_title'],
	                                                  'fa_content' => $param['content'],
	                                                  'fa_bgcolor' => $param['bgcolor'],
	                                                  'fa_color_title' => $param['titlecolor'],
	                                                  'fa_color_content' => $param['contentcolor'] ), array( 'fa_id' => 1 ), '%s' );

	if (!$updated ) {
		// There was an error.
		echo 'Error in your SQL request, please contact the administrator';
	} else {
		// No error.
		header('Location: http://local.dev/wordpress/wp-admin/index.php?page=first_plugin_wordpress%2Fapp%2Fadmin_panel.php');
	}
}
