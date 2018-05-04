<?php 

class ChapterManager extends Model
{
	public function getChapter()
	{
		$sql =
		'SELECT chapter.idChapter, chapter.titleChapter, chapter.authorChapter, chapter.contentChapter, chapter.dateChapter, chapter.library_id, chapter.publish, library.id, library.title
		FROM chapter
		INNER JOIN library
		ON chapter.library_id = library.id
		WHERE chapter.library_id = '.htmlspecialchars($_GET['id']) ;

		return $this->getAll($sql, 'chapter');
	}
}
