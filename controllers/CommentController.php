<?php

class CommentController extends Controller {
	public $table = '';

	public function post($id = null) {
		if ($id) {
			$this->table = 'comment';
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$com = htmlspecialchars($_POST['comment']);
			$this->loadModel('Episode');

			$insert = $this->table . '(authorCom, contentCom, chapter_id)';
			$value = 'VALUES(:pseudo, :com, :id)';
			$request = $insert . ' ' . $value;

			if (empty($request)) {
				header('Location:' . URL . '/pages/chapters');
			}
			$this->Episode->insert($request, $id);
			header('Location:' . URL . '/pages/chapter/' . $id);
		} else {
			header('Location:' . URL . '/pages/chapters');
		}
	}

	public function notify($id = null) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'comment';
			$this->loadModel('Episode');

			$value = $this->table . ' SET validate="0"';
			$where = 'WHERE idCom=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->Episode->notify($request, $id);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}

	public function publish($id = null) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'comment';
			$this->loadModel('Episode');

			$value = $this->table . ' SET validate="1"';
			$where = 'WHERE idCom=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->Episode->notify($request, $id);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}
	//suppression des commentaires
	public function delete($id = null) {
		$url = $_SERVER['HTTP_REFERER'];
		if ($id) {
			$this->table = 'comment';
			$this->loadModel('Episode');

			$where = $this->table . ' WHERE idCom=' . $id;
			$request = $where;
			if (empty($request)) {
				header('Location:' . $url);
			}
			$this->Episode->delete($request);
			header('Location:' . $url);
		} else {
			header('Location:' . $url);
		}
	}
}