<?php 

class EpisodeManager extends Model
{
	public function getEpisode()
	{
		$sql = 
			'SELECT c.idChapter as idEpisode, c.titleChapter as titleEpisode, c.authorChapter as authorEpisode, c.contentChapter as contentEpisode, c.dateChapter as dateEpisode, c.library_id as libId, com.authorCom, com.contentCom, com.dateCom as dateCom, com.validate as valCom, com.chapter_id as chapId, com.idCom
			FROM chapter as c
			INNER JOIN comment as com
			/* Sans la phrase de code ci-dessous l\'article s\'affiche sinon il demande un commantaire pour apparaitre */
			/* ON c.idChapter = com.chapter_id */
			WHERE c.idChapter = '.htmlspecialchars($_GET["id"]);

		return $this->getAll($sql, 'episode');
	}
}
