<?php

namespace App\Core;

use App\Core\App;
use App\Core\Helpers\ContentType;
use App\Core\Firefly\Firefly;

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => [],
	];

	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function patch($uri, $controller)
	{
		$this->routes['PATCH'][$uri] = $controller;
	}

	public function put($uri, $controller)
	{
		$this->routes['PUT'][$uri] = $controller;
	}

	public function delete($uri, $controller)
	{
		$this->routes['DELETE'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (!array_key_exists($uri, $this->routes[$requestType])) {
			\Ignite(404);
			throw new \Exception('No route defined for this URI.');
		}

		if (gettype($this->routes[$requestType][$uri]) == "object") {
			try {
				$result = $this->routes[$requestType][$uri]();
			} catch (\Throwable $th) {
				if (App::get("config")["production"] == false) {
					Firefly::AppFire($th, "Closure");
				} else {
					\Ignite(500);
				}
			}
			if (gettype($result) == 'array') {
				ContentType::json();
				echo json_encode($result);
			} else if (gettype($result) == 'string') {
				echo $result;
			}
			return $result;
		} else {
			$arguments = explode('@', $this->routes[$requestType][$uri]);

			return $this->callAction(...$arguments);
		}
	}

	protected function callAction($controller, $action)
	{
		$namespacedController = "App\\Controllers\\{$controller}";

		$controller = new $namespacedController;

		if (!method_exists($controller, $action)) {
			\Ignite(501);
			throw new \Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}
		try {
			$result = $controller->$action();
		} catch (\Throwable $th) {
			if (App::get("config")["production"] == false) {
				Firefly::AppFire($th, $namespacedController);
			} else {
				\Ignite(500);
			}
		}
		if (gettype($result) == 'array') {
			ContentType::json();
			echo json_encode($result);
		} else if (gettype($result) == 'string') {
			echo $result;
		}
		return $result;
	}
}
