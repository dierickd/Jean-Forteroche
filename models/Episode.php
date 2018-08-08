<?php

class Episode extends Model {

	private $_idCom;
	private $_authorCom;
	private $_contentCom;
	private $_dateCom;
	private $_valCom;
	private $_chapId;

	/*public function __construct(array $data) {
		$this->hydrate($data);
	}*/

	// SETTER

	public function setIdCom($co_id) {
		$co_id = (int) $co_id;
		if ($co_id > 0) {
			$this->_idCom = $co_id;
		}
	}
	public function setAuthorCom($co_author) {
		if (is_string($co_author)) {
			$this->_authorCom = $co_author;
		}
	}
	public function setContentCom($co_content) {
		if (is_string($co_content)) {
			$this->_contentCom = $co_content;
		}
	}
	public function setDateCom($co_date) {
		$this->_dateCom = $co_date;
	}
	public function setValCom($co_val) {
		if (is_string($co_val)) {
			$this->_valCom = $co_val;
		}
	}
	public function setChapId($co_chapId) {
		$co_chapId = (int) $co_chapId;
		if ($co_chapId > 0) {
			$this->_chapId = $co_chapId;
		}
	}

	// GETTERS
	public function getChapId() {
		return $this->_chapId;
	}
	public function getIdCom() {
		return $this->_idCom;
	}
	public function getAuthorCom() {
		return $this->_authorCom;
	}
	public function getContentCom() {
		return $this->_contentCom;
	}
	public function getDateCom() {
		return $this->_dateCom;
	}
	public function getValCom() {
		return $this->_valCom;
	}
}