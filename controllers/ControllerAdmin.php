<?php 

require_once VIEW.'View.php';

class Controlleradmin 
{
	private $_bookManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) == 1)
		{
			$this->books();
		} elseif(isset($url) && count($url) == 2)
		{
			$this->controlForm();
		} else 
			throw new Exception("Page introuvable");
	}

	private function books()
	{
		$this->_bookManager = new BookManager;
		$books = $this->_bookManager->getBooks();

		$this->_view = new View('admin');
		$this->_view->generate(array(''));
	}

	private function controlForm()
	{
		$this->_bookManager = new BookManager;
		$books = $this->_bookManager->getBooks();

		$this->_view = new View('adHome');
		$this->_view->generate(array(''));
	}
}