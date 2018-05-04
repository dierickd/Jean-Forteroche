<?php 

class View
{
	private $_file;
	private $_t;

	function __construct($action)
	{
		$this->_file = VIEW.'View'.$action.'.php';
	}

	// GENERE ET AFFICHE LA VUE
	public function generate($data)
	{
		$content = $this-> generateFile($this->_file, $data);

		$view = $this->generateFile(VIEW.'template.php', array('t' => $this->_t, 'content' => $content));
		echo $view;
	}

	// GENERE UN FICHIER VUE ET RENVOIE LE RESULTAT PRODUIT
	private function generateFile($file, $data)
	{
		if(file_exists($file))
		{
			extract($data);

			ob_start();

			require_once VIEW.'header.php';
			require_once $file;

			return ob_get_clean();
		}
		else 
			throw new Exception("Fichier ".$file." introuvable !");
			
	}
}