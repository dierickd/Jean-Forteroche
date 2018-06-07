<?php 

class Episode extends Model
{
	private $_idEpisode;
	private $_titleEpisode;
	private $_contentEpisode;
	private $_authorEpisode;
	private $_dateEpisode;
	private $_libId;

	private $_idCom;
	private $_authorCom;
	private $_contentCom;
	private $_dateCom;
	private $_valCom;
	private $_chapId;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	// SETTER
	// TABLE EPISODE
	public function setIdEpisode($c_id)
	{
		$c_id = (int) $c_id;
		if($c_id > 0)
		{
			$this->_idEpisode = $c_id;
		}
	}
	public function setAuthorEpisode($c_author)
	{
		if(is_string($c_author))
		{
			$this->_authorEpisode = $c_author;
		}
	}

	public function setTitleEpisode($c_title)
	{
		if(is_string($c_title))
		{
			$this->_titleEpisode = $c_title;
		}
	}

	public function setContentEpisode($c_content)
	{
		if(is_string($c_content))
		{
			$this->_contentEpisode = $c_content;
		}
	}

	public function setlibId($c_libId)
	{
		if(is_string($c_libId))
		{
			$this->_libId = $c_libId;
		}
	}
	public function setDateEpisode($c_date)
	{
		$this->_dateEpisode = $c_date;
	}
	// TABLE COMMENT
	public function setIdCom($co_id)
	{
		$co_id = (int) $co_id;
		if($co_id > 0)
		{
			$this->_idCom = $co_id;
		}
	}
	public function setAuthorCom($co_author)
	{
		if(is_string($co_author))
		{
			$this->_authorCom = $co_author;
		}
	}
	public function setContentCom($co_content)
	{
		if(is_string($co_content))
		{
			$this->_contentCom = $co_content;
		}
	}
	public function setDateCom($co_date)
	{
		$this->_dateCom = $co_date;
	}
	public function setValCom($co_val)
	{
		if(is_string($co_val))
		{
			$this->_valCom = $co_val;
		}
	}
	public function setChapId($co_chapId)
	{
		$co_chapId = (int) $co_chapId;
		if($co_chapId > 0)
		{
			$this->_chapId = $co_chapId;
		}
	}


	// GETTERS
	// EPISODE
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
		return $this->_dateEpisode;
	}

	public function getLibId()
	{
		return $this->_libId;
	}
	// COMMENT
	public function getChapId()
	{
		return $this->_chapId;
	}
	public function getIdCom()
	{
		return $this->_idCom;
	}
	public function getAuthorCom()
	{
		return $this->_authorCom;
	}
	public function getContentCom()
	{
		return $this->_contentCom;
	}
	public function getDateCom()
	{
		return $this->_dateCom;
	}
	public function getValCom()
	{
		return $this->_valCom;
	}
}