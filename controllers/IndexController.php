<?php

class IndexController extends Controller {

	public $table = 'chapter';

	public function index() {
		$this->loadModel('chapter');
		$library = new model();
		$req = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
		$chapter = $this->chapter->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'id',
				'limit' => '3',
			),
		));
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}
}
