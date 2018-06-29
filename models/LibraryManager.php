<?php

class LibraryManager extends Model {
	public function getLibrary() {
		$sql =
			'SELECT id, title, author, resume
		FROM library';
		return $this->getAll($sql, 'library');
	}
}
