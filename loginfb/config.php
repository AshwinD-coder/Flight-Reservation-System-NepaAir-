<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '318707872928051',
	'app_secret' => '8b56d07952391a29160ed819054a1675',
	'default_graph_version' => 'v2.5'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>