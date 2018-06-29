<?php

class EpisodeComment extends Model {
	public function getComment() {
		if (isset($_GET["id"])) {
			$sql =
			'SELECT comment.idCom as idComment, comment.authorCom as authorComment, comment.contentCom as contentComment, comment.dateCom as dateComment, comment.validate as valCom, comment.chapterId as chapId
			FROM comment
			WHERE ' . htmlspecialchars($_GET["id"]);
		} else {
			$sql =
				'SELECT comment.idCom as idComment, comment.authorCom as authorComment, comment.contentCom as contentComment, comment.dateCom as dateComment, comment.validate as valCom, comment.chapterId as chapId
			FROM comment';
		}
		return $this->getAll($sql, 'comment');
	}
}
