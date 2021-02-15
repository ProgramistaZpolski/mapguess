<?php

return [
	"name" => "401 Unauthorized",
	"signal" => "error",
	"description" => "Your request was rejected because you are not authorized to access this.",
	"causes" => [
		"You are not logged in",
		"Your account does not have sufficient permissions to view this page"
	]
];