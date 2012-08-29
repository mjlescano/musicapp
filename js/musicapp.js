;(function() {
	var m = {};

	m.search = function(query) {
		var s = $();

		$.ajax({
			url: 'http://localhost/getjson.php?url=' + encodeURI('http://gdata.youtube.com/feeds/api/videos?v=2&alt=json&q='+query),
			success: function() {

			},
			error: function() {

			},
			complete: function () {
				s.trigger('search:success');
				console.log(arguments);
			}
		});

		return s;
	};

	MusicApp = m;
})();