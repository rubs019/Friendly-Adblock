<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 14:46
 */
function db_prefix($wpdb){

	$table_name = $wpdb->prefix;

	return $table_name;
}