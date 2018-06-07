<?php 

class BookManager extends Model
{
	public function getBooks()
	{
		$sql = 
		'SELECT library.id, library.title, library.author, library.resume, chapter.idChapter, chapter.titleChapter, chapter.authorChapter, chapter.contentChapter, chapter.dateChapter, chapter.library_id as chapLibId, chapter.publish
		FROM library
		INNER JOIN chapter
		LIMIT 0, 3';
		return $this->getAll($sql, 'Book');
	}
}

