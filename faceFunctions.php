<?php

require_once './facebooksdk/facebook.php';

$config = array();
$config[‘appId’] = '378585638878609';
$config[‘secret’] = '185f686abde886f0745eab7437515d80';
$config[‘fileUpload’] = false; // optional

$facebook = new Facebook($config);

$uid = $facebook->getUser();

$params = array(
  'scope' => 'read_stream, friends_likes',
  'redirect_uri' => 'http://musicapp.com/login'
);

$loginUrl = $facebook->getLoginUrl($params);

?>


<?php //echo phpinfo(); ?>