<?php
header('Content-type: text/json');
header('Content-type: application/json');

echo file_get_contents( 'http://gdata.youtube.com/feeds/api/videos?v=2&alt=json&max-results=1&q=' . urlencode($_GET['q']) );