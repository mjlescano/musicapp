<?php // require_once './faceFunctions.php'; ?> 
<html>
	<head>
		<title>Musicapp</title>

		<script src="http://connect.facebook.net/en_US/all.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
		<script src="js/musicapp.js"></script>

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
	$(function(){
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				$("#botonLogin").hide();

				FB.api('/me/music', function(response) {
				  console.log(response);
				});

				console.log("loged");
			} else {
				console.log(arguments)
			}
		});
	});
	</script>

	<h1> Musicapp.com </h1>

	<div id='botonLogin'> <fb:login-button registration-url="?view=procesaRegistro" /> </div>

	<?php
	
	if (isset($_GET['view']))
		include('./views/'.$_GET['view'].'.view.php');
	else
		include('./views/startpage.view.php'); // */
	?>

	<p>Realizado para el facebook worldhack 2012 BS AS</p>

	</body>
</html>