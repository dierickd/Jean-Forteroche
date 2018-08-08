<?php

class PagesController extends Controller {

	public $table = '';

	public function chapters($id = null) {
		$this->table = 'chapter';
		$this->loadModel('chapter');
		$req = "id, titleChapter, authorChapter, DATE_FORMAT(dateChapter, '%d/%m/%Y à %Hh%i') AS date, contentChapter, nbArt, online";
		$chapter = $this->chapter->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'nbArt',
			),
		));
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	public function chapter($id = null) {
		if ($id) {
			$this->findChapter($id);
			$this->findCom($id);
		} else {
			$this->e404('Page introuvable !');
		}
	}

	private function findChapter($id) {
		$this->table = 'chapter';
		$this->loadModel('chapter');
		$req = "id, titleChapter, authorChapter, DATE_FORMAT(dateChapter, '%d/%m/%Y à %Hh%i') AS date, contentChapter, nbArt, online";
		$chapter = $this->chapter->findOne($req, $this->table, array(
			'conditions' => array(
				'where' => $id,
			),
		));
		if (empty($chapter) OR intval($chapter->online) === 0) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	private function findCom($id) {
		$this->table = 'comment';

		$this->loadModel('episode');
		$library = new model();
		$req = "idCom, authorCom, contentCom, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%i') AS date, dateCom, validate, chapter_id";
		$comment = $this->episode->findAll($req, $this->table);
		if ($comment) {
			$this->set('comment', $comment);
		}
	}

}