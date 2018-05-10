<?php 

class EpisodeManager extends Model
{
	public function getEpisode()
	{
		$sql = 
			'SELECT c.idChapter as idEpisode, c.titleChapter as titleEpisode, c.authorChapter as authorEpisode, c.contentChapter as contentEpisode, c.dateChapter as dateEpisode, com.authorCom, com.contentCom, com.dateCom as dateCom, com.validate as valCom, com.chapter_id as chapId, com.idCom
			FROM chapter as c
			INNER JOIN comment as com
			ON com.chapter_id = c.idChapter
			WHERE c.idChapter = '.htmlspecialchars($_GET["id"]);
		return $this->getAll($sql, 'episode');
	}
}
