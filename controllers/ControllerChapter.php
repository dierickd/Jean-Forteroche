<?php 

require_once VIEW.'View.php';

class Controllerchapter
{
	private $_chapterManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) != 2)
		{
			throw new Exception("Page introuvable");
		} else
			$this->controlData();
	}

	private function chapter()
	{
		$this->_chapterManager = new ChapterManager;
		$chapter = $this->_chapterManager->getChapter();

		$this->_view = new View('chapter');
		$this->_view->generate(array('chapter' => $chapter));
	}

	private function controlData()
	{
		if(isset($_GET['id']))
		{
			if( (int) $_GET['id'])
			{
				$this->chapter();
			} else 
				throw new Exception("Page introuvable 2");
		} else 
			throw new Exception("Page introuvable 1");
	}
}
