<?php

return [
	"name" => "403 Forbidden",
	"signal" => "error",
	"description" => "Your request was rejected because you do not have permission to view this page.",
	"causes" => [
		"You are not logged in",
		"Only the webmaster can see the resources here",
		"You are trying to view a list of files in a folder"
	]
];
