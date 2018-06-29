<?php

require_once VIEW . 'View.php';

class Controllerabout {
	private $_aboutManager;
	private $_view;

	public function __construct($url) {
		if (isset($url) && count($url) > 1) {
			throw new Exception("Page introuvable");
		} else {
			$this->about();
		}

	}

	private function about() {
		$this->_aboutManager = new AboutManager;
		$about = $this->_aboutManager->getAbout();

		$this->_view = new View('about');
		$this->_view->generate(array('about' => $about));
	}
}