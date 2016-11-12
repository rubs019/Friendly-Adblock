<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 12/11/16
 * Time: 14:14
 */

function update_table(){
	global $wpdb;

	$updated = $wpdb -> update('wp_plugins_fa', array( 'fa_title' => 'Rubz'), array( 'fa_id' => 1 ));

	if ( false === $updated ) {
		// There was an error.
		var_dump('Error');
	} else {
		// No error. You can check updated to see how many rows were changed.
		var_dump('Cool');
	}
}
