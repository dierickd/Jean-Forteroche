<?php

class AdminController extends Controller {
	public $table;
	public $table2;

	public function home() {
		if (isset($_COOKIE['admin']) AND isset($_SESSION['admin'])) {
			$this->chapters();
			$this->comment();
		} else {
			setcookie('admin', '', time());
			header('Location: ' . URL . '/admin/connect');
		}
	}

	public function connect() {
		if (isset($_COOKIE['admin'])) {
			header('Location: ' . URL . '/admin/home');
		}
		if (isset($_POST['login'])) {
			$this->table = 'connect';

			$this->loadModel('ctrlPass');
			$library = new model();
			$req = 'id, user, pass, mail';
			$ctrlPass = $this->ctrlPass->findAll($req, $this->table);
			if (empty($ctrlPass)) {
				$this->e404('Page introuvable !');
			}
			$this->set('ctrlPass', $ctrlPass);
			$this->controlAccess($ctrlPass);
		} else {
			$this->render('connect');
			unset($_SESSION['error']);
		}
	}

	private function controlAccess($c) {
		$login = htmlspecialchars($_POST['login']);
		$mdp = sha1(htmlspecialchars($_POST['pass']));
		if ($login == $c[0]->user) {
			if ($mdp == $c[0]->pass) {
				unset($_SESSION['error']);
				setcookie('admin', 'connect', time() + 365 * 24 * 3600, null, null, false, true);
				$_SESSION['admin'] = 'online';
				header('Location: ' . URL . '/admin/home');
				die();
			} else {
				$_SESSION['error'] = 'error';
				$this->render('connect');
			}
		} else {
			$_SESSION['error'] = 'error';
			$this->render('connect');
		}
	}

	public function logout() {
		session_destroy();
		setcookie('admin', '', time());
		header('Location: ' . URL);
	}

	public function chapters() {
		if (!isset($_COOKIE['admin'])) {
			header('Location: ' . URL . '/admin/connect');
		}
		$this->table = 'chapter';

		$this->loadModel('chapter');
		$library = new model();
		$req = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
		$chapter = $this->chapter->findAll($req, $this->table);

		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	public function chapter($id = null) {
		if (!isset($_COOKIE['admin'])) {
			header('Location: ' . URL . '/admin/connect');
		}
		if (isset($id)) {
			$this->table = 'chapter';

			$this->loadModel('chapter');
			$library = new model();
			$req = 'id, titleChapter, authorChapter, contentChapter, nbArt, online';
			$chapter = $this->chapter->findOne($req, $this->table, array(
				'conditions' => array(
					'where' => $id,
				),
			));
		} else {
			$this->e404('Page introuvable !');
		}
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $chapter);
	}

	public function comment() {
		if (!isset($_COOKIE['admin'])) {
			header('Location: ' . URL . '/admin/connect');
		}
		$this->table = 'comment';

		$this->loadModel('Episode');
		$library = new model();
		$req = "idCom, authorCom, contentCom, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%i') as date, validate, chapter_id";
		$comment = $this->Episode->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'dateCom',
			),
		));
		if (empty($comment)) {
			$this->e404('Page introuvable !');
		}
		$this->set('comment', $comment);
		$this->chapters();
	}

	public function forgot() {
		$email = htmlspecialchars($_POST['mail']);
		$newPwd = "";
		$chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789";
		$lenString = strlen($chaine);

		for ($i = 1; $i <= 19; $i++) {
			$rdm = mt_rand(0, ($lenString - 1));
			if ($i > 1 && $i <= 19 && $i % 5 === 0) {
				$newPwd .= '-';
			}
			$newPwd .= $chaine[$rdm];
		}
		$this->controlData($email, $newPwd);
		$this->sendMail($email);
		header('Location: ' . URL . '/admin/connect');
	}

	public function controlData($mail, $pwd) {
		//header('Location: ' . URL . '/admin/connect');
	}

	public function sendMail($mail) {
		$encoding = "ISO-8859-1";
		$from_mail = 'webmaster@jeanforteroche.com';
		$from_name = 'Blog jean forteroche';
		$mail_subject = 'Réinitialisation de mot de passe';
		$mail_message = 'test';

		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
			$break = "\r\n";
		} else {
			$break = "\n";
		}

		// Preferences for Subject field
		$subject_preferences = array(
			"input-charset" => $encoding,
			"output-charset" => $encoding,
			"line-length" => 76,
			"line-break-chars" => $break,
		);

		// Mail header
		$header = "Content-type: text/html; charset=" . $encoding . " \r\n";
		$header .= "From: " . $from_name . " <" . $from_mail . "> \r\n";
		$header .= "MIME-Version: 1.0 \r\n";
		$header .= "Content-Transfer-Encoding: 8bit \r\n";
		$header .= "Date: " . date("r (T)") . " \r\n";
		$header .= iconv_mime_encode("Subject", $mail_subject);

		// Send mail
		mail($mail, $mail_subject, $mail_message, $header);
		die();
	}

	public function newchapter() {
		session_destroy();
		$url = $_SERVER['HTTP_REFERER'];
		$this->table = 'library';
		$this->table2 = 'chapter';

		$reqAll = new model();
		$req = 'id, title, author';
		$req2 = 'id';
		$library = $reqAll->findAll($req, $this->table);
		$chapter = $reqAll->findAll($req2, $this->table2);
		if (empty($library)) {
			$this->e404('Page introuvable !');
		}
		if (empty($chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('library', $library);
		$this->set('chapter', $chapter);
	}

}