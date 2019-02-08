<?php

class AdminController extends Controller {
	public $table;
	public $table2;

	public function home() {
		if (isset($_COOKIE['auth']) AND isset($_SESSION['auth'])) {
			$this->chapters();
			$this->comment();
			$this->members();
		} else {
			setcookie('auth', '', time());
			header('Location: ' . URL . '?pages/connect');
		}
	}

	
	public function members() {
		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		$this->table = 'connect';

		$this->loadModel('Ctrlpass');
		$library = new model();
		$req = "id, user, mail, DATE_FORMAT(date, '%d/%m/%Y à %Hh%i') as date";
		$members = $this->Ctrlpass->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'id',
				'limit' => '5',
			),
		));

		if (empty($members)) {
			$this->e404('Page introuvable !');
		}
		$this->set('members', $members);
	}

	public function chapters() {
		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		$this->table = 'chapter';

		$this->loadModel('Chapter');
		$library = new model();
		$req = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
		$chapter = $this->Chapter->findAll($req, $this->table);

		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	public function chapter($id = null) {
		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		if (isset($id)) {
			$this->table = 'chapter';

			$this->loadModel('Chapter');
			$library = new model();
			$req = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
			$chapter = $this->Chapter->findOne($req, $this->table, array(
				'conditions' => array(
					'where' => $id,
				),
			));
		} else {
			$this->e404('Page introuvable !');
		}
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	public function comment() {
		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		$this->table = 'comment';

		$this->loadModel('Episode');
		$library = new model();
		$req = "idCom, authorCom, contentCom, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%i') as date, validate, chapter_id";
		$comment = $this->Episode->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'dateCom',
			),
		));
		if (empty($comment)) {
			$this->e404('Page introuvable !');
		}
		$this->set('comment', $comment);
		$this->chapters();
	}

	public function newchapter() {
		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		$this->table = 'library';
		$this->table2 = 'chapter';

		$reqAll = new model();
		$req = 'id, title, author';
		$req2 = 'id';
		$library = $reqAll->findAll($req, $this->table);
		$chapter = $reqAll->findAll($req2, $this->table2);
		if (empty($library)) {
			$this->e404('Page introuvable !');
		}
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('library', $library);
		$this->set('chapter', $chapter);
	}

	public function about() {

		if (!isset($_COOKIE['auth'])) {
			header('Location: ' . URL . '?pages/connect');
		}
		$this->table = 'about';

		$this->loadModel('About');
		$req = 'idJf, nameJf, titleJf, contentJf';
		$about = $this->About->findAll($req, $this->table);

		$this->set('about', $about);
	}

}
