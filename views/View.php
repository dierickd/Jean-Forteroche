<?php

class View {
	private $_file;
	private $_t;

	function __construct($action) {
		$url = '';
		$url = explode('/', filter_var($action, FILTER_SANITIZE_URL));
		if (isset($url[1])) {
			$this->_file = VIEW . $url[0] . DS . 'View' . $url[1] . '.php';
		} else {
			$this->_file = VIEW . 'View' . $url[0] . '.php';
		}
	}

	// GENERE ET AFFICHE LA VUE
	public function generate($data) {
		$content = $this->generateFile($this->_file, $data);

		$view = $this->generateFile(VIEW . 'template.php', array('t' => $this->_t, 'content' => $content));
		echo $view;
	}

	// GENERE UN FICHIER VUE ET RENVOIE LE RESULTAT PRODUIT
	private function generateFile($file, $data) {
		if (file_exists($file)) {
			extract($data);
			ob_start();

			require_once VIEW . 'header.php';
			require_once $file;
			require_once VIEW . 'footer.php';

			return ob_get_clean();
		} else {
			throw new Exception("Fichier " . $file . " introuvable !");
		}

	}
}