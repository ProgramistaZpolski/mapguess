<?php

return [
	"name" => "502 Bad Gateway",
	"signal" => "criticalerror",
	"description" => "The server did not recive a valid response from another server.",
	"causes" => [
		"You mistyped something",
		"The webmaster did not code a solution to your request",
		"An API wich the server uses has been shut down",
		"A server is down"
	]
];