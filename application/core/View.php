<?php

namespace application\core;

class View
{

	public $path;
	public $route;
	public $layout1 = 'header';
	public $layout2 = 'footer';

	public function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route['action'];
	}

	public function render($title, $vars = [])
	{
		extract($vars);
		$path = 'application/views/htdocs/' . $this->path . '.php';
		if (file_exists($path)) {
			require 'application/views/htdocs/layouts/' . $this->layout1 . '.php';
			require $path;
			require 'application/views/htdocs/layouts/' . $this->layout2 . '.php';
		}
	}

	public function redirect($url)
	{
		header('location: /' . $url);
		exit;
	}


	public static function errorCode($code)
	{
		http_response_code($code);
		$path = 'application/views/errors/' . $code . '.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}
}
