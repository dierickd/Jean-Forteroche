<?php 

class BookManager extends Model
{
	public function getBooks()
	{
		$sql = 'SELECT id, title, author, resume FROM library ORDER BY id LIMIT 0, 3';
		return $this->getAll($sql, 'Book');
	}
}

