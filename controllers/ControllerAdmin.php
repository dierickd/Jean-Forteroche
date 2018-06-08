<?php 

require_once VIEW.'View.php';

class Controlleradmin 
{
	private $_bookManager;	
	private $_ctrlPass;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) == 1)
		{
			$this->books();
		} elseif(isset($url) && count($url) == 2)
		{
			$this->controlForm($url);
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

	private function controlForm($url)
	{
		if($url['action'] == 'admin')
		{
			if ($url['layout'] == 'connect') {
				$this->_ctrlPass = new ctrlPassManager;
				$pass = $this->_ctrlPass->getPass();

				require_once BACK.'connect.php';
			} elseif ($url['layout'] == 'dashboard') {
				$this->_ctrlPass = new ctrlPassManager;
				$pass = $this->_ctrlPass->getPass();
				
				$this->_view = new View('dashboard');
				$this->_view->generate(array('ctrl' => $pass));
			} else 
				throw new Exception("Page introuvable");
		} else 
			throw new Exception("Page introuvable");
			
	}
}