<?php

function Ignite(Int $code = 500)
{
	$folder = substr($code, 0, 1);
	if ($folder != 1 && $folder != 2) {
		http_response_code($code);
	}
	$data = require_once "{$folder}x/{$code}.php";
	require_once "IgnitionTemplate.view.php";
	die();
}
