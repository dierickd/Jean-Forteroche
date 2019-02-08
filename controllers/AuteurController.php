<?php

class AuteurController extends Controller {

	public $table = 'about';
	public $request;

	function __construct($request) {
		$this->request = $request;
		$this->url = $_SERVER['HTTP_REFERER'];
	}

	public function about() {
		$this->loadModel('About');
		$req = 'idJf, nameJf, titleJf, contentJf';
		$author = $this->About->findAll($req, $this->table);
		$this->set('author', $author);
	}

	public function save() {
		$this->loadModel('About');
		$value = $this->table . ' SET contentJf="' . $_POST['content'] . '", titleJf="'.$_POST['title'].'" ';
		$request = $value;
		if (empty($request)) {
			header('Location:' . $this->url);
		}
		$this->About->notify($request);
		header('Location:' . $this->url);
	}

}
