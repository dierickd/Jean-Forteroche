<?php

class BookManager extends Model {
	public function getBooks() {
		$sql =
			"SELECT idChapter, titleChapter, authorChapter, contentChapter, DATE_FORMAT(dateChapter, '%d-%m-%Y %Hh%i') AS dateChapter, library_id as chapLibId, publish, nbArt
		FROM chapter
		ORDER BY nbArt
		DESC
		LIMIT 0, 3";
		return $this->getAll($sql, 'Book');
	}
}
