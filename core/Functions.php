<?php

function view($name, $data = [])
{
	extract($data);
	return require "app/views/{$name}.view.php";
}

function redirect($path)
{
	http_response_code(307);
	header("Location: /{$path}");
	die();
}

function redirectPerm($path)
{
	http_response_code(308);
	header("Location: /{$path}");
	die();
}

if (!function_exists('str_contains')) {
	function str_contains(string $haystack, string $needle): bool
	{
		return '' === $needle || false !== strpos($haystack, $needle);
	}
}

function dd($data) {
	echo "<pre style='font-size: 1.25rem; line-height: 1.5;'>";
	var_dump($data);
	echo "</pre>";
	die();
}

function dump($data) {
	echo "<pre style='font-size: 1.25rem; line-height: 1.5;'>";
	var_dump($data);
	echo "</pre>";
}

function app_path()
{
	return __DIR__;
}

function asset(String $filename)
{
	$split = explode(".", $filename);
	if ($split[1] == "css") {
		return "/assets/css/" . $split[0] . ".css";
	} else if ($split[1] == "js") {
		return "/assets/js/" . $split[0] . ".js";
	} else if ($split[1] == "mjs") {
		return "/assets/js/" . $split[0] . ".min.js";
	} else if ($split[1] == "mcss") {
		return "/assets/css/" . $split[0] . ".min.css";
	} else {
		return "/" . "assets/" . $filename;
	}
}