<?php

return [
	"name" => "405 Method not allowed",
	"signal" => "error",
	"description" => "Your request was rejected because it was sent using a wrong method.",
	"causes" => [
		"An attacker tried to spoof the login page",
		"There is a bug in the code on the server",
		"You are trying to send an API request with a wrong method"
	]
];
