<?php 

$r = $_SERVER["REQUEST_URI"];
if ($r === '/') {
	$f = '/index.html';
} else {
	$f = $r . '/index.html';
}

include('public' . $f);

