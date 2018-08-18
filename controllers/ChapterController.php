<?php

class ChapterController extends Controller {
	public $table;
	private $url;

	function __construct() {
		$this->url = $_SERVER['HTTP_REFERER'];
	}

	public function draft($id) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET online="0"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->chapter->notify($request, $id);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function publish($id = null) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET online="1"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->chapter->notify($request, $id);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function save($id = null) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET titleChapter="' . $_POST['title'] . '", contentChapter="' . $_POST['content'] . '", nbArt="' . $_POST['article'] . '" ';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;

			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->chapter->notify($request);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function add() {
		$this->table = 'chapter';
		$article = htmlspecialchars($_POST['article']);
		$artwork = htmlspecialchars($_POST['artwork']);
		$title = htmlspecialchars($_POST['title']);
		$content = htmlspecialchars($_POST['content']);

		if (intval($article) > 0) {
			$controlData = new model();

			$control = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
			$chapter = $controlData->controlExists($control, $this->table, array(
				'conditions' => array(
					'where' => $article,
				),
			));
			$this->set('chapter', $chapter);
			if (empty($chapter->titleChapter)) {

				$insert = $this->table . '(titleChapter, authorChapter, contentChapter, nbArt, library_id, online)';
				$value = 'VALUES(:title, :author, :content, :article, :artwork, :online)';
				$request = $insert . ' ' . $value;
				$controlData->addChapter($request);

				header('Location: ' . URL . '/admin/chapters');
			} else {
				$_SESSION['titleChapter'] = $chapter->titleChapter;
				$_SESSION['article'] = $article;
				$_SESSION['title'] = $title;
				$_SESSION['content'] = $content;
				header('Location: ' . $this->url);
			};
		} else {
			$_SESSION['error'] = 'error';
			header('Location: ' . $this->url);
		}
	}

}
