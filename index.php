<?php require_once './faceFunctions.php'; ?> 
<html>
	<head>
		<title>Musicapp</title>
	</head>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '378585638878609', // App ID
	      channelUrl : 'http://test.musicapp.com/channel.html', // Channel File
	      status     : true, // check login status
	      cookie     : true, // enable cookies to allow the server to access the session
	      xfbml      : true  // parse XFBML
	    });

	  // Additional initialization code here
	  };

	  // Load the SDK Asynchronously
	  (function(d){
	     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     ref.parentNode.insertBefore(js, ref);
	   }(document));
	</script>

	<body>
	<div id="fb-root"></div>
	<h1> Musicapp.com </h1>

	<?php
	
	if ($_GET['view'])
		include('./views/'.$_GET['view'].'.view.php');
	else
		include('./views/startpage.view.php'); // */
	?>

	Realizado para el facebook worldhack 2012 BS AS

	</body>
</html>