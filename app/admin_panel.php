<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 10/11/16
 * Time: 09:27
 */
global $wpdb;

$pathPlugin = plugin_basename( __DIR__ );

// Model
// Select current user prefix table
include_once ('model/db_get_prefix.php');
$prefix = db_prefix($wpdb);

// Check if DB is already created
include_once ('model/db_check.php');
$db_check = dbIsCreate($wpdb);

if (!$db_check){
	// Return true if DB is created correctly
	include_once ('model/db_create.php');
	$isCreate = db_create($wpdb, $prefix);

	// Insert first line of DB
	if ($isCreate){
		include_once ('model/db_first_insert.php');
		$firstInsert = insert_table($wpdb, $prefix);
	}
}
// Return array db plugins_fa
include_once ('model/db_get_data.php');
$db_request = get_result($wpdb, $prefix);

// view
// Render view admin panel
function renderView($request, $path){
	include_once (dirname( __FILE__ ). '/views/admin_panel.php');
}

renderView($db_request, $pathPlugin);
