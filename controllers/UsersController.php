<?php 

class UsersController extends Controller {
	public $table;
	private $url;

    public function profile() {
        
		$this->table = 'connect';
		$this->loadModel('User');
		$req = "id, user, pass, mail, DATE_FORMAT(date, '%d-%m-%Y à %Hh%i') AS date";
		$User = $this->User->findOne($req, $this->table, array(
			'conditions' => array(
				'where' => $_SESSION['id'],
			),
        ));
		if (empty($User) OR intval($User->id) === 0) {
			$this->e404('Page introuvable !');
		}
		$this->set('user', $User);
    }

    
	public function change_mail($id) {
		if($id){
			$this->table = 'connect';
			$this->loadModel('CtrlPass');
			$req = 'id, user, pass, mail';
			$mail = htmlspecialchars($_POST['email']);
			$Conf_mail = htmlspecialchars($_POST['confirme_email']);
			
			// control mail
			if(!isset($mail) || !preg_match("#^[A-Za-z0-9._-]+@(live|gmail|outlook).[a-z]{2,4}$#",$mail)){
				$_SESSION['flash']['mail'] = 'Cet email n\'est pas valide';
			}elseif($mail != $Conf_mail){
				$_SESSION['flash']['mail'] = 'Les emails doivent être identiques';
			}elseif ($this->CtrlPass->controlExists($req, $this->table, array(
				'conditions' => array(
					'where' => $mail,
				),
			), 'mail') == true) {
				$_SESSION['flash']['mail'] = 'Cet email est déjà utilisé';
			}

			if(!empty($_SESSION['flash'])){
				header('Location: ' . URL . '?users/profile');
				exit;
			}

			$value = $this->table . ' SET mail='.$mail;
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				$_SESSION['flash']['mail'] = 'Oups!! Une erreur inattendue est survenue, veuillez réessayez plus tard !';
				header('Location: ' . URL . '?users/profile');
				exit;
			}
			$this->CtrlPass->notify($request, $id);
			header('Location: ' . URL . '?users/profile');
		} else {
			$_SESSION['flash']['mail'] = 'Oups!! Une erreur inattendue est survenue, veuillez réessayez plus tard !';
			header('Location: ' . URL . '?users/profile');
		}
	}

	public function change_pass($id) {
		if($id){
			$this->table = 'connect';
			$this->loadModel('CtrlPass');
			$req = 'id, user, pass, mail';
			$pass = htmlspecialchars($_POST['pass']);
			$Conf_pass = htmlspecialchars($_POST['confirme_pass']);
			$lenPass = mb_strlen($pass);

			// control password
			if(!isset($pass) || !preg_match("#^[0-9a-zA-Z]+$#",$pass)){
				$_SESSION['flash']['pass'] = 'Mot de passe non valide';
			}elseif($lenPass < 6){
				$_SESSION['flash']['pass'] = 'Mot de passe non valide - minmum 6 caractères';
			}elseif($pass != $Conf_pass){
				$_SESSION['flash']['pass'] = 'Les mots de passes doivent être identiques';
			}

			if(!empty($_SESSION['flash'])){
				header('Location: ' . URL . '?users/profile');
				exit;
			}

			$newPass = password_hash($pass, PASSWORD_BCRYPT);
			$value = $this->table . ' SET pass="'.$newPass.'"';
			$where = 'WHERE id=' . $id;
			$request = $value . ' ' . $where;
			if (empty($request)) {
				$_SESSION['flash']['pass'] = 'Oups!! Une erreur inattendue est survenue, veuillez réessayez plus tard !';
				header('Location: ' . URL . '?users/profile');
				exit;
			}

			$this->CtrlPass->notify($request);
			header('Location: ' . URL . '?users/profile');
		} else {
			$_SESSION['flash']['pass'] = 'Oups!! Une erreur inattendue est survenue, veuillez réessayez plus tard !';
			header('Location: ' . URL . '?users/profile');
		}
	}

}
