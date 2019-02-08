<?php

class Controller {

	public $request;
	private $vars = array();
	public $layout = 'default';
	private $rendered = false;

	function __construct($request) {
		$this->request = $request;
	}

	public function render($view) {
		if ($this->rendered) {return false;}
		extract($this->vars);
		if (strpos($view, '/') === 0 OR $view === 'index') {
			$view = VIEW . $view . '.php';
		} else {
			$view = VIEW . $this->request->controller . DS . $view . '.php';
		}
		ob_start();
		require $view;
		$content_for_layout = ob_get_clean();
		require VIEW . 'layout' . DS . 'header.php';
		require VIEW . 'layout' . DS . $this->layout . '.php';
		require VIEW . 'layout' . DS . 'footer.php';
		$this->rendered = true;
	}

	public function set($key, $value = null) {
		if (is_array($key)) {
			$this->vars += $key;
		} else {
			$this->vars[$key] = $value;
		}
	}

	public function loadModel($name) {
		$file = MODEL.ucfirst(strtolower($name)).'.php';
		require_once $file;
		if (!isset($this->$name)) {
			$this->$name = new $name();
		}
	}

	public function e404($message) {
		header("HTTP/1.0 404 Not Found");
		$this->set('message', $message);
		$this->render('/pages/404');
		die();
	}
}