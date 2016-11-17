<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 17/11/16
 * Time: 17:24
 */

function dbIsCreate($wpdb){
	$table_name = $wpdb->prefix.'plugins_fa';
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){
		return false;
	} else {
		return true;
	}
}