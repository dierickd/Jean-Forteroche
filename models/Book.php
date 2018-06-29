<?php

class Book extends Model {
	private $_idChapter;
	private $_titleChapter;
	private $_contentChapter;
	private $_authorChapter;
	private $_nbArt;
	private $_date;
	private $_publish;
	private $_chapLibId;

	public function __construct(array $data) {
		$this->hydrate($data);
	}

	// SETTER

	// CHAPTER
	public function setIdChapter($id) {
		$id = (int) $id;
		if ($id > 0) {
			$this->_idChapter = $id;
		}
	}
	public function setPublish($publish) {
		if (is_string($publish)) {
			$this->_publish = $publish;
		}
	}
	public function setAuthorChapter($author) {
		if (is_string($author)) {
			$this->_authorChapter = $author;
		}
	}

	public function setTitleChapter($title) {
		if (is_string($title)) {
			$this->_titleChapter = $title;
		}
	}

	public function setContentChapter($content) {
		if (is_string($content)) {
			$this->_contentChapter = $content;
		}
	}

	public function setnbArt($nbArt) {
		$nbArt = (int) $nbArt;
		if ($nbArt > 0) {
			$this->_nbArt = $nbArt;
		}
	}

	public function setDateChapter($date) {
		$this->_date = $date;
	}

	public function setchapLibId($id) {
		$id = (int) $id;
		if ($id > 0) {
			$this->_chapLibId = $id;
		}
	}

	// GETTERS

	// CHAPTER
	public function getIdChapter() {
		return $this->_idChapter;
	}

	public function getAuthorChapter() {
		return $this->_authorChapter;
	}

	public function getTitleChapter() {
		return $this->_titleChapter;
	}

	public function getContentChapter() {
		return $this->_contentChapter;
	}

	public function getNbArtChapter() {
		return $this->_nbArt;
	}

	public function getDateChapter() {
		return $this->_date;
	}

	public function getPublish() {
		return $this->_publish;
	}
	public function getLibId() {
		return $this->_chapLibId;
	}
}