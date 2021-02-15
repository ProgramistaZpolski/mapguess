<?php

namespace App\Core\Firefly;

class Firefly {
	public static function AppFire(\Throwable $th, String $source = "ProgramistaZpolski/Firefly")
	{
		$hint = null;
		if (str_contains($th, "Call to undefined function")) {
			$hint = [
				"name" => "Function not found.",
				"tip" => "Have you included a function using <code>use</code> or <code>include_once</code>?<br>
				Have you updated the autoload file?"
			];
		} else if (str_contains($th, "Division by zero")) {
			$hint = [
				"name" => "Division by zero.",
				"tip" => "Have you made sure to check if a value is 0?"
			];
		} else if (str_contains($th, "Undefined variable")) {
			$hint = [
				"name" => "Variable not found.",
				"tip" => "Have you made sure to import a variable?<br>
				Have you declared a variable?<br>
				Have you checked for any scoping issues?"
			];
		} else if (str_contains($th, "expects parameter")) {
			$hint = [
				"name" => "Invalid parameter passed.",
				"tip" => "Have you made sure to use the right variable/function?<br>
				Did you put the parameter in a correct place?"
			];
		}
		require_once "Firefly.view.php";
		die();
	}
}