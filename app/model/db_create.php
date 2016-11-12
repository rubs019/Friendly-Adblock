<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 14:06
 */
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