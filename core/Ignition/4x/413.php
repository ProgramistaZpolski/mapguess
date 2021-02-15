<?php

return [
	"name" => "413 Payload Too Large",
	"signal" => "error",
	"description" => "Your request was refused because the request payload is larger than the server is able to process.",
	"causes" => [
		"You provided too much data to process"
	]
];
