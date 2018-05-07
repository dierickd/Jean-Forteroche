<?php 

class EpisodeComment extends Model
{
	public function getComment()
	{
		$sql = 
			'SELECT comment.idCom as idComment, comment.authorCom as authorComment, comment.contentCom as contentComment, comment.dateCom as dateComment, comment.validate as valCom, comment.chapterId as chapId
			FROM comment
			WHERE '.htmlspecialchars($_GET["id"]);
		return $this->getAll($sql, 'comment');
	}
}

