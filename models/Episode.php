<?php 

class Episode extends Model
{
	private $_idEpisode;
	private $_titleEpisode;
	private $_contentEpisode;
	private $_authorEpisode;
	private $_date;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	// SETTER
	public function setIdEpisode($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_idEpisode = $id;
		}
	}
	public function setAuthorEpisode($author)
	{
		if(is_string($author))
		{
			$this->_authorEpisode = $author;
		}
	}

	public function setTitleEpisode($title)
	{
		if(is_string($title))
		{
			$this->_titleEpisode = $title;
		}
	}

	public function setContentEpisode($content)
	{
		if(is_string($content))
		{
			$this->_contentEpisode = $content;
		}
	}

	public function setDateEpisode($date)
	{
		$this->_date = $date;
	}

	// GETTERS
	public function getIdEpisode()
	{
		return $this->_idEpisode;
	}

	public function getAuthorEpisode()
	{
		return $this->_authorEpisode;
	}

	public function getTitleEpisode()
	{
		return $this->_titleEpisode;
	}

	public function getContentEpisode()
	{
		return $this->_contentEpisode;
	}

	public function getDateEpisode()
	{
		return $this->_date;
	}
}