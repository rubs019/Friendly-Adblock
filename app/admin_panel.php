<?php
/**
 * Created by PhpStorm.
 * User: rubz_johnson
 * Date: 10/11/16
 * Time: 09:27
 */

function renderView(){
	include_once (dirname( __FILE__ ). '/views/admin_panel.php');
}
var_dump(plugins_url( '/assets/css/style.css', __FILE__ ));

renderView();