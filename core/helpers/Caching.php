<?php

namespace App\Core\Helpers;

class Cache
{
	public static function set(String $time) {
		$processedTime = $time;
		if (substr($time, -1) == "d") {
			$processedTime = substr_replace($time, "", -1) * 86400;
		} else if (substr($time, -1) == "o") {
			$processedTime = substr_replace($time, "", -1) * 2629800;
		} else if (substr($time, -1) == "h") {
			$processedTime = substr_replace($time, "", -1) * 3600;
		} else if (substr($time, -1) == "m") {
			$processedTime = substr_replace($time, "", -1) * 60;
		} else if (substr($time, -1) == "y") {
			$processedTime = substr_replace($time, "", -1) * 31557600;
		}

		header("Cache-Control: public, max-age={$processedTime}, immutable");
	}

	public static function year() {
		header("Cache-Control: public, max-age=31557600, immutable");
	}

	public static function month() {
		header("Cache-Control: public, max-age=2629800, immutable");
	}

	public static function day() {
		header("Cache-Control: public, max-age=86400, immutable");
	}

	public static function hour() {
		header("Cache-Control: public, max-age=3600, immutable");
	}
}