<?php
	require_once '../facebooksdk/facebook.php';

	$config = array();
	$config[‘appId’] = '378585638878609';
	$config[‘secret’] = '185f686abde886f0745eab7437515d80';
	$config[‘fileUpload’] = false; // optional

	$facebook = new Facebook($config);

	$facebook
?>