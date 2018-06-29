<?php

class ctrlPass extends Model {
	private $_user;
	private $_pass;
	private $_mail;

	public function __construct(array $data) {
		$this->hydrate($data);
	}

	// SETTER
	public function setUser($user) {
		$this->_user = $user;
	}
	public function setPass($pass) {
		$this->_pass = $pass;
	}
	public function setMail($mail) {
		$this->_mail = $mail;
	}

	// GETTERS
	public function getUser() {
		return $this->_user;
	}

	public function getPass() {
		return $this->_pass;
	}

	public function getMail() {
		return $this->_mail;
	}
}