<?php

require_once VIEW . 'View.php';

Class Rooter {
	private $_ctrl;
	private $_view;

	public function rooteReq() {
		try
		{
			//CHARGEMENT AUTO DES CLASSES MODELS
			spl_autoload_register(function ($class) {
				require_once (MODEL . $class . '.php');
			});

			if (isset($_GET['action'])) {
				$action = $_GET['action'];
				if ($action = 'chapter') {
					$this->url($action);
				} elseif ($action = 'episode') {
					$this->url($action);
				} elseif ($action = 'about') {
					$this->url($action);
				} elseif ($action = 'library') {
					$this->url($action);
				} elseif ($action = 'admin') {
					$this->url($action);
				} elseif ($action = 'dashboard') {
					$this->url($action);
				} else {
					throw new Exception('Page introuvable');
				}

			} else {
				$this->url($_GET['action'] = 'home');
			}
		} catch (Exception $e) {
			$errorMsg = $e->getMessage();
			$this->_view = new View('Error');
			$this->_view->generate(array('errorMsg' => $errorMsg));
		}
	}

	private function url($url) {
		$url = '';
		$url = explode('/', filter_var($_GET['action'], FILTER_SANITIZE_URL));
		$controller = ucfirst(strtolower($url[0]));
		$controllerClass = "controller" . $controller;
		$controllerFile = CONTROLER . $controllerClass . ".php";
		if (file_exists($controllerFile)) {
			require_once $controllerFile;
			$this->_ctrl = new $controllerClass($_GET);
		} else {
			throw new Exception('Page introuvable');
		}

	}
}
