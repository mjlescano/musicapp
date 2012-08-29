<div id='loginBox' width='200px'>
	<iframe
		src="https://www.facebook.com/plugins/registration?
		client_id=<?php echo $appId; ?>&
		redirect_uri=<?php echo $urlPath; ?>?view=procesaRegistro&
		fields=[
		 {'name':'name'},
		 {'name':'email'},
		 {'name':'location'},
		 {'name':'gender'},
		 {'name':'birthday'},
		]"
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="500px"
        height="100%">
	</iframe>
</div>