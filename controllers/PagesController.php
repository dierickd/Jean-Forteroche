<?php

class PagesController extends Controller {

	public $table = '';

	public function chapters($id = null) {
		$this->table = 'chapter';
		$this->loadModel('Chapter');
		$req = "id, titleChapter, authorChapter, DATE_FORMAT(dateChapter, '%d/%m/%Y à %Hh%i') AS date, contentChapter, nbArt, online";
		$Chapter = $this->Chapter->findAll($req, $this->table, array(
			'conditions' => array(
				'order' => 'nbArt',
			),
		));
		if (empty($Chapter)) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $Chapter);
	}

	public function chapter($id = null) {
		if ($id) {
			$this->findChapter($id);
			$this->findCom($id);
		} else {
			$this->e404('Page introuvable !');
		}
	}

	private function findChapter($id) {
		$this->table = 'chapter';
		$this->loadModel('Chapter');
		$req = "id, titleChapter, authorChapter, DATE_FORMAT(dateChapter, '%d/%m/%Y à %Hh%i') AS date, contentChapter, nbArt, online";
		$Chapter = $this->Chapter->findOne($req, $this->table, array(
			'conditions' => array(
				'where' => $id,
			),
		));
		if (empty($Chapter) OR intval($Chapter->online) === 0) {
			$this->e404('Page introuvable !');
		}
		$this->set('chapter', $Chapter);
	}

	private function findCom($id) {
		$this->table = 'comment';

		$this->loadModel('episode');
		$library = new model();
		$req = "idCom, authorCom, contentCom, DATE_FORMAT(dateCom, '%d/%m/%Y à %Hh%i') AS date, dateCom, validate, chapter_id";
		$comment = $this->episode->findAll($req, $this->table);
		if ($comment) {
			$this->set('comment', $comment);
		}
	}

	
	public function connect() {
		if (isset($_POST['login'])) {
			$this->table = 'connect';

			$this->loadModel('CtrlPass');
			$req = 'id, user, pass, mail';
			$ctrlPass = $this->CtrlPass->controlExists($req, $this->table, array(
				'conditions' => array(
					'where' => htmlspecialchars($_POST['login']),
				),
			), 'user');
			if(empty($ctrlPass)){
				$this->render('connect');
				unset($_SESSION['error']);
				die();
			}
			$this->set('CtrlPass', $ctrlPass);
			$this->controlAccess($ctrlPass);
		} else {
			$this->render('connect');
			unset($_SESSION['error']);
		}
	}
	
	private function controlAccess($c) {		
		if (password_verify($_POST['pass'], $c->pass)) {
			unset($_SESSION['error']);
			setcookie('auth', 'connect', time() + 3600*24*3, null, null, false, true);
			if($c->id == '13') {
				$_SESSION['auth'] = 'admin';
				$_SESSION['user'] = $c->user;
				$_SESSION['id'] = $c->id;
				$_SESSION['mail'] = $c->mail;
				header('Location: ' . URL . '?admin/home');
				die();
			} else {
				$_SESSION['auth'] = 'guest';
				$_SESSION['user'] = $c->user;
				$_SESSION['id'] = $c->id;
				$_SESSION['mail'] = $c->mail;
				header('Location: ' . URL . '?users/profile');
				die();
			}
		}
		$_SESSION['error'] = 'Login et/ou mot de passe incorrect !';
	}

	public function logout() {
		unset($_SESSION['auth']);
		setcookie('auth', '', time());
		header('Location: ' . URL);
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
		header('Location: ' . URL . '?pages/connect');
	}

	public function create() {
		// code...
	}

	public function register() {
		$this->table = 'connect';
		$this->loadModel('CtrlPass');
		$req = 'id, user, pass, mail';
		$pseudo = htmlspecialchars($_POST['login']);
		$mail = htmlspecialchars($_POST['email']);
		$pass = htmlspecialchars($_POST['password']);
		$Conf_pass = htmlspecialchars($_POST['confirme_password']);
		
		// control login
		if(!isset($pseudo) || !preg_match("#^[0-9a-zA-Z_]+$#",$pseudo)){
			$_SESSION['flash']['login'] = 'Ce pseudo n\'est pas valide';
		}elseif ($this->CtrlPass->controlExists($req, $this->table, array(
			'conditions' => array(
				'where' => $pseudo,
			),
		), 'user') == true) {
			$_SESSION['flash']['login'] = 'Ce pseudo est déjà utilisé';
		}

		// control mail
		if(!isset($mail) || !preg_match("#^[A-Za-z0-9._-]+@(live|gmail|outlook).[a-z]{2,4}$#",$mail)){
			$_SESSION['flash']['mail'] = 'Cet email n\'est pas valide';
		}elseif($mail != $_POST['confirme_email']){
			$_SESSION['flash']['mail'] = 'Les emails doivent être identiques';
		}elseif ($this->CtrlPass->controlExists($req, $this->table, array(
			'conditions' => array(
				'where' => $mail,
			),
		), 'mail') == true) {
			$_SESSION['flash']['mail'] = 'Cet email est déjà utilisé';
		}

		// control password
		if(!isset($pass) || !preg_match("#^[0-9a-zA-Z]+$#",$pass)){
			$_SESSION['flash']['pass'] = 'Mot de passe non valide';
		}elseif(mb_strlen($pass < 6)){
			$_SESSION['flash']['pass'] = 'Mot de passe non valide - minimum 6 caractères';		
		}elseif($pass != $Conf_pass){
			$_SESSION['flash']['pass'] = 'Les mots de passes doivent être identiques';
		}


		if(!empty($_SESSION['flash'])){
			header('Location: ' . URL . '?pages/create');
			exit;
		}

		$_SESSION['success'] = $mail;

		// Some people
		$to  = $mail; // notez la virgule

		// Subject
		$subject = 'Inscription blog Jean Forteroche';
   
		// Message
		$message = '
		<!DOCTYPE html>
		<html lang="fr">
		<head>
			<meta charset="UTF-8">
			<title></title>
		</head>
		<body style="background-color:#e0e7f1">
		<h3>Bienvenue sur le blog de Jean Forteroche</h3>
		<p>Merci de bien vouloir confirmer votre compte en copiant le lien dans votre navigateur</p>
		<p>'.URL . '?pages/connect'.'</p>
		</body>
		</html>
		';
   
		// For send the mail in HTML, Define 'Content-type' into the header
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
   
		// Header additionnal
		$headers[] = 'To: '.$mail;
		$headers[] = 'From: Inscrption | Jean Forteroche';
		// $headers[] = 'Cc: anniversaire_archive@example.com';
		// $headers[] = 'Bcc: anniversaire_verif@example.com';

		// Send
		mail($to, $subject, $message, implode("\r\n", $headers));

		// save data into the base
		$insert = $this->table . '(user, pass, mail)';
		$value = 'VALUES(:user, :pass, :mail)';
		$request = $insert . ' ' . $value;
		$this->CtrlPass->add_user($request);

		header('Location: ' . URL . '?pages/connect');
	}

	public function controlData($mail, $pwd) {
		header('Location: ' . URL . '?pages/connect');
	}


}