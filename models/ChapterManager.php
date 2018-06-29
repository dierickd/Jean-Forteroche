<?php

class ChapterManager extends Model {
	public function getChapter() {
		if (isset($_GET['id'])) {
			$sql =
			'SELECT chapter.idChapter, chapter.titleChapter, chapter.authorChapter, chapter.contentChapter, chapter.dateChapter, chapter.library_id, chapter.publish, library.id as libId, library.title
		FROM chapter
		INNER JOIN library
		ON chapter.library_id = library.id
		WHERE chapter.library_id = ' . htmlspecialchars($_GET['id']);
		} else {
			$sql =
				'SELECT chapter.idChapter, chapter.titleChapter, chapter.authorChapter, chapter.contentChapter, chapter.dateChapter, chapter.library_id, chapter.publish, library.id as libId, library.title
		FROM chapter
		INNER JOIN library
		ON chapter.library_id = library.id';
		}
		return $this->getAll($sql, 'chapter');
	}
}
