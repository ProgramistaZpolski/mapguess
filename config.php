<?php

// Note, this is a example. Please update these settings

return [
	'database' => [
		'name' => 'mapguess',
		'username' => 'root',
		'password' => 'yourpasswordthere',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		],
	],
	"site" => [
		"name" => "MapGuess",
		"description" => "Zgadywanie map, bo why not",
		"url" => "http://kasztan.art:7000/",
		"author" => [
			"name" => "Piotr Badełek",
			"twitter" => "@ProgramistaZ"
		],
		"language" => "pl"
	],
	"production" => false
];
