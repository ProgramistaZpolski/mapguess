<?php

namespace App\Core\Helpers;

class Arr
{
	public static function random(array $array, Int $count = 1)
	{
		$result = [];
		for ($i = 0; $i < $count; $i++) {
			array_push($result, $array[array_rand($array)]);
		}
		return $result;
	}

	public static function exists(array $array, String $key)
	{
		return array_key_exists($key, $array);
	}

	public static function flatten(array $array)
	{
		$result = [];
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$result = array_merge($result, Arr::flatten($value));
			} else {
				$result = array_merge($result, array($key => $value));
			}
		}
		return $result;
	}
}
