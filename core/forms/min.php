<?php

namespace App\Core\Forms;

class Min
{
	public static function validate(String $setting, String $value)
	{
		if (str_contains($setting, "min:") !== FALSE) {
			if (strlen($value) < explode(":", $setting)[1]) {
				return true;
			} else if (is_numeric($value) == "int" && $value < explode(":", $setting)[1]) {
				return true;
			} else {
				return false;
			}
		}
	}
}
