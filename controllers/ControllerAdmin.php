<?php 

require_once VIEW.'View.php';

class Controlleradmin
{
	private $_bookManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) > 1)
		{
			throw new Exception("Page introuvable");
		} else 
			$this->books();
	}

	private function books()
	{
		$this->_bookManager = new BookManager;
		$books = $this->_bookManager->getBooks();

		$this->_view = new View('admin');
		$this->_view->generate(array(''));
	}
}