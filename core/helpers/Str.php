<?php

namespace App\Core\Helpers;

class Str
{
	public static function without(String $haystack, String $needle)
	{
		return str_replace($needle, "", $haystack);
	}

	public static function contains(String $haystack, String $needle)
	{
		return str_contains($haystack, $needle);
	}

	public static function containsSome(String $haystack, array $needle)
	{
		foreach ($needle as $key => $value) {
			if (str_contains($haystack, $value)) {
				return true;
			}
		}
		return false;
	}

	public static function containsAll(String $haystack, array $needle)
	{
		$result = 0;
		foreach ($needle as $key => $value) {
			if (str_contains($haystack, $value)) {
				$result++;
			}
		}
		if ($result == sizeof($needle)) {
			return true;
		} else {
			return false;
		}
	}

	public static function end(String $haystack)
	{
		return substr($haystack, -1);
	}
	public static function limit(String $haystack, Int $length, String $end = "...")
	{
		return substr($haystack, 0, $length) . $end;
	}
}
