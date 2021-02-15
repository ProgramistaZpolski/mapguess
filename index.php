<?php
require_once 'vendor/autoload.php';
require_once 'core/bootstrap.php';
require_once 'core/Ignition/Ignition.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());