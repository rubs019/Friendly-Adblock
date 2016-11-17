<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 14:08
 */

function get_result($wpdb, $prefix){
	global $wpdb;

	$table_name = $wpdb->prefix.'plugins_fa';
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){
		var_dump('ok');
	}

	// If the data table is created
	// if(!$isCreate){return false;}

	$results = $wpdb->get_row("SELECT * FROM ".$prefix."plugins_fa LIMIT 0, 1");

	if($results !== null) {
		return $results;
	} else {
		// echo "ERROR : Error select DB, please try to reactive your plugins [Issue 001]";
		return false;
	}
}