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
			$this->loadModel('Chapter');

			$value = $this->table . ' SET online="0"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->Chapter->notify($request, $id);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function publish($id = null) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('Chapter');

			$value = $this->table . ' SET online="1"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->Chapter->notify($request, $id);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function delete($id = null) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('Chapter');

			$request = $this->table . ' WHERE id=' . $id;
			if (empty($request)) {
				header('Location:' . $this->url);
			}
			$this->Chapter->delete($request);
			header('Location:' . $this->url);
		} else {
			header('Location:' . $this->url);
		}
	}

	public function save($id = null) {
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('Chapter');
			$article = htmlspecialchars($_POST['article']);
			if (intval($article) > 0) {
				//control du numéro d'article
				if ((int) $_SESSION['number'] != (int) $article) {
					$control = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
					if ($this->Chapter->controlExists($control, $this->table, array(
						'conditions' => array(
							'where' => $article,
						),
					)) == true) {
						$_SESSION['error'] = 'errorSave';
						$_SESSION['number'] = $article;
						header('Location:' . $this->url);
						die();
					}
				}
				$value = $this->table . ' SET titleChapter="' . $_POST['title'] . '", contentChapter="' . $_POST['content'] . '", nbArt="' . $_POST['article'] . '" ';
				$where = 'WHERE id=' . $id;
				$request = $value . ' ' . $where;
				if (empty($request)) {
					header('Location:' . $this->url);
				}
				$this->Chapter->notify($request);
				$_SESSION['success'] = 'success';
				header('Location:' . $this->url);
			} else {
				$_SESSION['int'] = 'nonInt';
				header('Location: ' . $this->url);
			}
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
			$Chapter = $controlData->controlExists($control, $this->table, array(
				'conditions' => array(
					'where' => $article,
				),
			));
			$this->set('chapter', $Chapter);
			if (empty($Chapter->titleChapter)) {

				$insert = $this->table . '(titleChapter, authorChapter, contentChapter, nbArt, library_id, online)';
				$value = 'VALUES(:title, :author, :content, :article, :artwork, :online)';
				$request = $insert . ' ' . $value;
				$controlData->addChapter($request);

				header('Location: ' . URL . '?admin/chapters');
			} else {
				$_SESSION['titleChapter'] = $Chapter->titleChapter;
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
