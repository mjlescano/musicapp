;(function() {
	var m = {};

	function parseYoutube(r) {
		var songs = [], type = 'youtube';
		_.each(r.feed.entry, function(e) {
			var d = {
				type: type,
				id: e['media$group']['yt$videoid']['$t'],
				title: e.title['$t']
			};
			songs.push(d);
		});
		return songs;
	}

	m.search = function(query) {
		var s = $();
		var url = 'api/youtube.php?q=' + encodeURIComponent(query);
		$.ajax({
			url: url,
			success: function(r) {
				var data = parseYoutube(r);
				console.log('youtube: ', data);
				s.trigger('search:success',  data);
			},
			complete: function (response, msg) {
				console.log('search:' + msg);
			}
		});

		return s;
	};

	MusicApp = m;
})();