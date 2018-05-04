<?php 

class EpisodeManager extends Model
{
	public function getEpisode()
	{
		$sql = 
			'SELECT idChapter as idEpisode, titleChapter as titleEpisode, authorChapter as authorEpisode, contentChapter as contentEpisode
			FROM chapter
			WHERE '.htmlspecialchars($_GET["id"]);
		return $this->getAll($sql, 'episode');
	}
}

