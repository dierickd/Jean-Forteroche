<?php

require_once VIEW . 'View.php';

class Controlleradmin {
	private $_adminAbout;
	private $_adminLibrary;
	private $_user;
	private $_ctrlPass;
	private $_view;

	public function __construct($url) {
		if (isset($url) && count($url) == 1) {
			$this->books();
		} elseif (isset($url) && count($url) == 2) {
			$this->controlForm($url);
		} else {
			throw new Exception("Page introuvable");
		}

	}

	private function books() {
		$this->_bookManager = new BookManager;
		$books = $this->_bookManager->getBooks();

		$this->_view = new View('admin/admin');
		$this->_view->generate(array());
	}

	private function controlForm($url) {
		if ($url['action'] == 'admin') {
			if ($url['layout'] == 'connect') {
				$this->_ctrlPass = new ctrlPassManager;
				$pass = $this->_ctrlPass->getPass();

				require_once BACK . 'connect.php';

			} elseif ($url['layout'] == 'dashboard') {
				$this->_bookManager = new BookManager;
				$adminBook = $this->_bookManager->getBooks();

				$this->_episodeManager = new EpisodeManager;
				$adminChapter = $this->_episodeManager->getEpisode();

				$this->_aboutManager = new AboutManager;
				$adminAbout = $this->_aboutManager->getAbout();

				$this->_user = new ctrlPassManager;
				$adminUser = $this->_user->getPass();

				$this->_LibraryManager = new LibraryManager;
				$adminLibrary = $this->_LibraryManager->getLibrary();

				$this->_view = new View('admin/dashboard');
				$this->_view->generate(array(
					'adminBook' => $adminBook,
					'adminChapter' => $adminChapter,
					'adminAbout' => $adminAbout,
					'adminUser' => $adminUser,
					'adminLibrary' => $adminLibrary,
				));
			} elseif ($url['layout'] == 'library') {
				$this->_bookManager = new BookManager;
				$adminBook = $this->_bookManager->getBooks();

				$this->_view = new View('admin/adminLivres');
				$this->_view->generate(array('adminBook' => $adminBook));
			} else {
				throw new Exception("Page introuvable");
			}

		} else {
			throw new Exception("Page introuvable");
		}

	}
}