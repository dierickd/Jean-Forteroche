<?php

class AuteurController extends Controller {

	public $table = 'about';
	public $request;

	function __construct($request) {
		$this->request = $request;
		$this->url = $_SERVER['HTTP_REFERER'];
	}

	public function about() {
		$this->loadModel('about');
		$req = 'idJf,nameJf, titleJf, contentJf';
		$author = $this->about->findAll($req, $this->table);
		$this->set('author', $author);
	}

	public function save() {
		$this->table = 'about';
		$this->loadModel('about');

		$value = $this->table . ' SET contentJf="' . $_POST['content'] . '" ';
		$request = $value;

		if (empty($request)) {
			header('Location:' . $this->url);
		}
		$this->about->notify($request);
		header('Location:' . $this->url);
	}

}
