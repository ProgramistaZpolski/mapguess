<?php

return [
	"name" => "500 Internal Server Error",
	"signal" => "criticalerror",
	"description" => "The server has encountered an error that prevented it from completing your request.",
	"causes" => [
		"The server is down",
		"The server is being updated",
		"The server does not know how to handle your request"
		/* Another reason: The sysadmin is drunk */
	]
];