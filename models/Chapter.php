<?php

class Chapter extends Model {

	private $id;
	private $titleChapter;
	private $contentChapter;
	private $authorChapter;
	private $nbArt;
	private $date;
	private $online;

	/*public function __construct($data) {
		$this->hydrate($data);
	}*/

// SETTER
	public function setId($id) {
		$id = (int) $id;
		if ($id > 0) {
			$this->id = $id;
		}
	}
	public function setPublish($publish) {
		if (is_string($publish)) {
			$this->publish = $publish;
		}
	}
	public function setAuthorChapter($author) {
		if (is_string($author)) {
			$this->authorChapter = $author;
		}
	}

	public function setTitleChapter($title) {
		if (is_string($title)) {
			$this->titleChapter = $title;
		}
	}

	public function setContentChapter($content) {
		if (is_string($content)) {
			$this->contentChapter = $content;
		}
	}

	public function setDateChapter($date) {
		$this->date = $date;
	}
//**************
	public function setTitle($libTitle) {
		if (is_string($libTitle)) {
			$this->libTitle = $libTitle;
		}
	}

// GETTERS
	public function getIdChapter() {
		return $this->id;
	}

	public function getAuthorChapter() {
		return $this->authorChapter;
	}

	public function getTitleChapter() {
		return $this->titleChapter;
	}

	public function getContentChapter() {
		return $this->contentChapter;
	}

	public function getDateChapter() {
		return $this->date;
	}

	public function getPublish() {
		return $this->publish;
	}
}