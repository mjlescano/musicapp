<?php require_once './faceFunctions.php'; ?> 
<html>
	<head>
		<title>Musicapp</title>

		<script src="http://connect.facebook.net/en_US/all.js"></script>
		
		<script>
		  FB.init({
		  appId  : '378585638878609',
		  status : true, // check login status
		  cookie : true, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});
		</script>

	</head>

	<body>
	<div id="fb-root"></div>

	<script type="text/javascript">
	FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
	  	$("#").hide();
	  }
	}

	</script>

	<h1> Musicapp.com </h1>

	<div id='botonLogin'> <fb:login-button registration-url="?view=procesaRegistro" /> </div>

	<?php
	
	if ($_GET['view'])
		include('./views/'.$_GET['view'].'.view.php');
	else
		include('./views/startpage.view.php'); // */
	?>

	<script>
	document.onload = FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
	    // the user is logged in and has authenticated your
	    // app, and response.authResponse supplies
	    // the user's ID, a valid access token, a signed
	    // request, and the time the access token 
	    // and signed request each expire
	    var uid = response.authResponse.userID;
	    var accessToken = response.authResponse.accessToken;
	    alert ("loged: "+accessToken);


	  } else if (response.status === 'not_authorized') {
	    // the user is logged in to Facebook, 
	    // but has not authenticated your app
	  } else {
	    // the user isn't logged in to Facebook.
	    alert ("not loged");
	  }
	 });
	</script>

	<p>Realizado para el facebook worldhack 2012 BS AS</p>

	</body>
</html>