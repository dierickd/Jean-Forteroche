<?php

class About extends model {

	private $_id;
	private $_nameJf;
	private $_titleJf;
	private $_contentJf;

	// SETTER
	public function setIdJf($idJf) {
		$idJf = (int) $idJf;
		if ($idJf > 0) {
			$this->_idJf = $idJf;
		}
	}
	public function setNameJf($nameJf) {
		if (is_string($nameJf)) {
			$this->_nameJf = $nameJf;
		}
	}
	public function setTitleJf($titleJf) {
		if (is_string($titleJf)) {
			$this->_titleJf = $titleJf;
		}
	}
	public function setContentJf($contentJf) {
		if (is_string($contentJf)) {
			$this->_contentJf = $contentJf;
		}
	}

	//GETTER
	public function getId() {
		return $this->_idJf;
	}
	public function getName() {
		return $this->_nameJf;
	}
	public function getTitle() {
		return $this->_titleJf;
	}
	public function getContent() {
		return $this->_contentJf;
	}
}