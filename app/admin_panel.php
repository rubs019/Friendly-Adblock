<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 10/11/16
 * Time: 09:27
 */
global $wpdb;

// Model
// Select current user prefix table
include_once ('model/db_get_prefix.php');
$prefix = db_prefix($wpdb);

// Return true if DB is already created
include_once ('model/db_create.php');
$isCreate = db_create($wpdb, $prefix);

// Insert first line of DB
//

// Return array db plugins_fa
include_once ('model/db_get_data.php');
$db_request = get_result($wpdb, $prefix, $isCreate);

// view
// Render view admin panel
function renderView($request){
	include_once (dirname( __FILE__ ). '/views/admin_panel.php');
}

renderView($db_request);
