<?php

namespace App\Controllers;

use App\Core\Helpers\Arr;
use App\Core\App;
use App\Core\Forms\Forms;

class PagesController
{
	protected $countries = [
		"USA",
		"Germany",
		"Russia",
		"China",
		"Japan",
		"India",
		"Antarctica",
		"Canada",
		"France",
		"Poland",
		"Taiwan",
		"Greenland",
		"Egypt",
		"Pakistan",
		"Vietnam",
		"Norway",
		"Sweden",
		"Denmark",
		"Switzerland",
		"South Africa",
		"United Kingdom",
		"Isle of Man",
		"Panama",
		"Columbia"
	];

	protected function generateCountry(Array $notEqualTo = ["Kasztanlandia"]) {
		$result = $notEqualTo;
		do {
			$result = Arr::random($this->countries);
		} while (in_array($result, $notEqualTo));
		return $result[0];
	}

	public function home()
	{
		$data = Arr::random(App::get("database")->selectAll("maps"));
		$countries = explode(",", $data[0]->countries);
		$place = [];
		foreach ($countries as $country) {
			$randomCountry = $this->generateCountry($place);
			array_push($place, [
				"computed" => str_replace(' ', '', $country),
				"human" => $country
			]);
			array_push($place, [
				"computed" => str_replace(' ', '', $randomCountry),
				"human" => $randomCountry
			]);
		}

		shuffle($place);

		return view('game', [
			"map" => asset("maps/" . $data[0]->filename),
			"place" => $place
		]);
	}

	public function gameover() {
		Forms::validate([
			"map" => ["required", "min:18", "max:21"]
		], function () {
			\Ignite(412);
		});
		$result = App::get("database")->sql("SELECT * FROM `maps` WHERE `filename` = '" . explode("/", $_POST["map"])[3] . "'");
		$countries = explode(",", $result[0]->countries);
		$valid = true;
		foreach ($countries as $country) {
			if (!array_key_exists(str_replace(' ', '', $country), $_POST)) {
				$valid = false;
			}
		}
		if ($valid) {
			\Ignite(200);
		} else {
			\Ignite(510);
		}
	}
}
