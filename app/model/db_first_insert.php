<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 17/11/16
 * Time: 16:03
 */

function insert_table($wpdb, $param) {

	// $insert = $wpdb->prepare( "INSERT INTO $param.plugins_fa ('fa_id', 'fa_title', 'fa_content', 'fa_img', 'fa_btn_agree', 'fa_btn_disagree', 'fa_bgcolor', 'fa_color_title', 'fa_color_content') ");
	$insert = $wpdb->insert($param."plugins_fa", array(
			'fa_id' => NULL,
			'fa_title' => 'Plugin activé',
			'fa_content' => 'Congratulations ! The plugin was installed correctly',
			'fa_img' => '',
			'fa_btn_agree' => '',
			'fa_btn_disagree' => '',
			'fa_bgcolor' => 'FFFFFF',
			'fa_color_title' => '000000',
			'fa_color_content' => '000000'
	));

	if (!$insert ) {
		// There was an error.
		echo 'Error in your SQL request, please contact the administrator';
	} else {
		// No error.
		return true;
	}
}