<?php
header('Content-type: text/json');
header('Content-type: application/json');

echo file_get_contents( urldecode( $_GET['url'] ) );