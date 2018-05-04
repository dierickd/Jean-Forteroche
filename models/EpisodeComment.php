<?php 

class EpisodeComment extends Model
{
	public function getComment()
	{
		$sql = 
			'SELECT comment.id as idComment, comment.author as authorComment, comment.content as contentComment, comment.date as dateComment, comment.validate as valCom, comment.chapterId as chapId
			FROM comment
			WHERE '.htmlspecialchars($_GET["id"]);
		return $this->getAll($sql, 'comment');
	}
}

