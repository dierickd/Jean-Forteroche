<?php

Class Dispatcher {

	var $request;

	function __construct() {
		$this->request = new request();
		Router::parse($this->request->url, $this->request);
		$controller = $this->loadController();
		if (!in_array($this->request->action, array_diff(get_class_methods($controller), get_class_methods('Controller')))) {
			$this->error('Le controller ' . $this->request->controller . ' n\'a pas de méthode ' . $this->request->action);
			die();
		}
		call_user_func_array(array($controller, $this->request->action), $this->request->params);
		$controller->render($this->request->action);
	}

	private function error($message) {
		$controller = new Controller($this->request);
		$controller->set('message', $message);
		$controller->render('/pages/404');
		if (!isset($controller)) {
			$Controller->e404($message);
		}
	}

	public function loadController() {
		if($this->request->controller == '') {$this->request->controller = 'index';}
		$controller = ucfirst(strtolower($this->request->controller));
		$fileName = $controller . 'Controller';
		$file = CONTROLER . $fileName . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			$this->error('Fichier introuvable !');
			die();
		}
		return new $fileName($this->request);
	}

}
