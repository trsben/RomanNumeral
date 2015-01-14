<?php

$appPath = dirname(__FILE__);

try {
	require_once('functions.php');

	$data = count($_POST) > 0 ? $_POST : $_GET;

	$api = new Api_Index($data);
	Helper::output($api->run());
}
catch (Exception $e) {
	Helper::output(array(
		'status' => '400',
		'result' => 'Invalid param'
	));
}
