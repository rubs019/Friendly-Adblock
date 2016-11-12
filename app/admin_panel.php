<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 10/11/16
 * Time: 09:27
 */

// Load prefix of wordpress DB
$prefix = db_prefix();

// Model
// Return true if DB is already created
$isCreate = db_create($prefix);

// Insert first line of DB

// Return array db plugins_fa
$db_request = get_result($prefix, $isCreate);


// view
// Render view admin panel
renderView($db_request);

function renderView($request){
	include_once (dirname( __FILE__ ). '/views/admin_panel.php');
}

// Select current user prefix table
function db_prefix(){
	global $wpdb;

	$table_name = $wpdb->prefix;
	return $table_name;
}

function get_result($prefix, $isCreate){
	global $wpdb;

	if(!$isCreate){return false;}
	$results = $wpdb->get_row("SELECT * FROM ".$prefix."plugins_fa LIMIT 0, 1");

	if($results !== null) {
		return $results;
	} else {
		echo "ERROR : Error select DB, please try to reactive your plugins [Issue 001]";
		return;
	}
}

function db_create($prefix){
	global $wpdb;

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS ".$prefix."_plugins_fa (
  	fa_id int(11) NOT NULL AUTO_INCREMENT,
    fa_title varchar(100) NOT NULL,
    fa_content varchar(360) NOT NULL,
    fa_img varchar(256) NOT NULL,
    fa_btn_agree varchar(20) NOT NULL,
    fa_btn_disagree varchar(20) NOT NULL,
    fa_bgcolor varchar(6) NOT NULL,
    fa_color_title varchar(6) NOT NULL,
    fa_color_content varchar(6) NOT NULL,
    PRIMARY KEY (fa_id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	$result = dbDelta( $sql );

	if(empty($result)){
		echo "ERROR : Error create DB, please try to reactive your plugins [Issue 000]";
		return false;
	} else {
		return true;
	}
}