<?php

class IndexController extends Controller {

	public $table = 'chapter';

	public function index() {
		$this->loadModel('Chapter');
		$library = new model();
		$req = "id, titleChapter, authorChapter, DATE_FORMAT(dateChapter, '%d/%m/%Y à %Hh%i') AS date, contentChapter, nbArt, online";
		$Chapter = $this->Chapter->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'id',
				'limit' => '4',
			),
		));
		if (empty($Chapter)) {
			$this->e404('Page introuvable - IndexController !');
		}
		$this->lastComment();
		$this->set('chapter', $Chapter);
	}
	
	private function lastComment() {
		$this->table = 'comment';

		$this->loadModel('episode');
		$library = new model();
		$req = "idCom, authorCom, contentCom, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%i') AS date, dateCom, validate, chapter_id";
		$comment = $this->episode->findAll($req, $this->table, array(
			'conditions' => array(
				'order'	=> 'idCom',
				'limit' => '3',
			),
		));
		if ($comment) {
			$this->set('comment', $comment);
		}
	}
}

