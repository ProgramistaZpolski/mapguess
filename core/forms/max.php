<?php

namespace App\Core\Forms;

class Max
{
	public static function validate(String $setting, String $value)
	{
		if (str_contains($setting, "max:") !== FALSE) {
			if (strlen($value) > explode(":", $setting)[1]) {
				return true;
			} else if (is_numeric($value) && $value > explode(":", $setting)[1]) {
				return true;
			} else {
				return false;
			}
		}
	}
}
