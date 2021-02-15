<?php

namespace App\Core\Helpers;

class Storage
{
	public static function get(String $filename)
	{
		return file_get_contents($filename);
	}

	public static function put(String $filename, String $content)
	{
		file_put_contents($filename, $content);
		return file_get_contents($filename);
	}

	public static function add(String $filename, String $content)
	{
		file_put_contents($filename, file_get_contents($filename) . $content);
		return file_get_contents($filename);
	}

	public static function is(String $filename)
	{
		return file_exists($filename);
	}
}
