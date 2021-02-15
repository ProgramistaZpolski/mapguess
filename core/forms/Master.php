<?php

namespace App\Core\Forms;

class Forms
{
	public static function validate(array $settings, $onError)
	{
		function errorOut($callback, String $field)
		{
			$callback($field);
			die();
		}

		foreach ($settings as $key => $value) {
			$form = $_REQUEST[$key];
			if (in_array("required", $value) && !$form) {
				errorOut($onError, $key);
			}

			if (in_array("number", $value) && !is_numeric($form)) {
				errorOut($onError, $key);
			}

			foreach ($value as $setting) {
				if (gettype($setting) == "object") {
					if (!$setting($form)) {
						errorOut($onError, $key);
					}
				} else {
					if (Min::validate($setting, $form) || Max::validate($setting, $form)) {
						errorOut($onError, $key);
					}
				}
			}
		}
	}
}
