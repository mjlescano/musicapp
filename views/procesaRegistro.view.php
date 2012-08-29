<?php require_once './views/procesaRegistro.back.php'; ?> 

Se abrira un popup de facebook para logearte

<script>
$(function(){
	FB.login(function(response) {
	   if (response.authResponse) {
	     FB.api('/me', function(response) {
	       window.location = "<?php echo URLPATH;?>"
	     });
	   } else {
	     console.log('User cancelled login or did not fully authorize.');
	   }
	 }, {scope: 'email,user_likes,user_photos,user_location,user_likes,user_videos,user_status'});
}); 
</script>