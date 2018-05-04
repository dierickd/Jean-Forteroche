<?php 

require_once VIEW.'View.php';

class Controllerepisode
{
	private $_episodeManager;
	private $_view;

	public function __construct($url)
	{
		if(isset($url) && count($url) != 2)
		{
			throw new Exception("Page introuvable");
		} else
			$this->controlData();
	}

	private function episode()
	{
		$this->_episodeManager = new EpisodeManager;
		$episode = $this->_episodeManager->getEpisode();

		$this->_view = new View('episode');
		$this->_view->generate(array('episode' => $episode));
	}

	private function controlData()
	{
		if(isset($_GET['action']) && $_GET['action'] == 'episode')
		{
			if(isset($_GET['id']) && (int) $_GET['id'])
			{
				$this->episode();
			} else 
				throw new Exception("Page introuvable 2");
		} else 
			throw new Exception("Page introuvable 1");
	}
}

