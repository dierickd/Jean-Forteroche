<?php

class ChapterController extends Controller {
	public $table;

	public function draft($id) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET online="0"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->chapter->notify($request, $id);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}

	public function publish($id = null) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET online="1"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->chapter->notify($request, $id);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}

	public function save($id = null) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'chapter';
			$this->loadModel('chapter');

			$value = $this->table . ' SET titleChapter="' . $_POST['title'] . '", contentChapter="' . $_POST['content'] . '" ';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;

			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->chapter->notify($request, $id);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}

	public function add() {
		header('Location: ' . URL . '/admin/chapters');
	}

}
