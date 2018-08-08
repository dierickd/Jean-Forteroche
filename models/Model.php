<?php
class model {

	static $connections = array();
	public $conf = 'default';
	public $table = false;
	public $db;

	public function __construct() {
		$conf = Conf::$databases[$this->conf];
		if (!isset($conf)) {
			$this->db = $conf;
			return true;
		}
		try {
			$pdo = new PDO('mysql:host=' . $conf['host'] . ';dbname=' . $conf['database'] . ';charset=utf8', $conf['login'], $conf['password']);
			Model::$connections[$this->conf] = $pdo;
			$this->db = $pdo;
		} catch (PDOException $e) {
			if (conf::$debug >= 1) {
				die($e->getmessage());
			} else {
				die('Impossible de se connecter à la base de donnée');
			}
		}
	}

	public function findOne($req, $table, $cond) {
		$sql = 'SELECT ' . $req . ' FROM ' . $table . ' WHERE id=' . $cond['conditions']['where'];
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetch(PDO::FETCH_OBJ);
	}

	public function findAll($req, $table, $cond = null) {
		$sql = 'SELECT ' . $req . ' FROM ' . $table . ' ';
		if (isset($cond['conditions'])) {
			if (isset($cond['conditions']['order'])) {
				$sql = $sql . 'ORDER BY ' . $cond['conditions']['order'] . ' DESC';
			}
			if (isset($cond['conditions']['limit'])) {
				$sql = $sql . ' LIMIT ' . $cond['conditions']['limit'];
			}
		}
		$pre = $this->db->query($sql);
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function insert($req, $id) {
		$sql = 'INSERT INTO ' . $req;
		$pre = $this->db->prepare($sql);
		$pre->execute(array(
			'pseudo' => htmlspecialchars($_POST['pseudo']),
			'com' => htmlspecialchars($_POST['comment']),
			'id' => htmlspecialchars($id),
		));
		$pre->closeCursor();
	}
	public function addChapter($req) {
		$sql = 'INSERT INTO ' . $req;
		$pre = $this->db->prepare($sql);
		$pre->execute(array(
			'titleChapter' => htmlspecialchars($_POST['title']),
			'authorChapter' => 'Jean Forteroche',
			'dateChapter' => CURRENT_TIMESTAMP,
			'contentChapter' => htmlspecialchars($_POST['content']),
			'nbArt' => htmlspecialchars($_POST['article']),
			'library_id' => htmlspecialchars($_POST['chapter']),
			'online' => htmlspecialchars($_POST['online']),
		));
		$pre->closeCursor();
	}
	public function notify($req) {
		$sql = 'UPDATE ' . $req;
		$pre = $this->db->prepare($sql);
		$pre->execute();
		$pre->closeCursor();
	}

	public function delete($req) {
		$sql = 'DELETE FROM ' . $req;
		$pre = $this->db->prepare($sql);
		$pre->execute();
		$pre->closeCursor();
	}
}
