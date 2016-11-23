<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 12:13
 */


include_once __DIR__.'/../../../../../wp-config.php';
include_once __DIR__ . '/../../../../../wp-load.php';
include_once __DIR__ . '/../../../../../wp-includes/wp-db.php';

// TEST INPUT

// MODEL
global $wpdb;

include_once('../model/db_update.php');
$result = update_table($wpdb, $_POST);
if ($result){
	$name = plugin_basename(__DIR__);
	$newvalue = str_replace("controller", "admin_panel.php", $name);
	wp_redirect(admin_url("index.php?page=".$newvalue));
} else {
	echo "Error update SQL";
}