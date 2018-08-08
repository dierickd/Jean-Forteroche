<?php

class AuteurController extends Controller {

	public $table = 'about';

	public function about() {
		$this->loadModel('about');
		$req = 'idJf,nameJf, titleJf, contentJf';
		$author = $this->about->findAll($req, $this->table);
		$this->set('author', $author);
	}
}
