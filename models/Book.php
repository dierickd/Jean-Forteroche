<?php 

class Book extends Model
{
	private $_id;
	private $_title;
	private $_resume;
	private $_author;

	private $_idChapter;
	private $_titleChapter;
	private $_contentChapter;
	private $_authorChapter;
	private $_date;
	private $_publish;
	private $_chapLibId;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	// SETTER
	public function setId($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_id = $id;
		}
	}

	public function setAuthor($author)
	{
		if(is_string($author))
		{
			$this->_author = $author;
		}
	}

	public function setTitle($title)
	{
		if(is_string($title))
		{
			$this->_title = $title;
		}
	}

	public function setResume($resume)
	{
		if(is_string($resume))
		{
			$this->_resume = $resume;
		}
	}
	// CHAPTER
	public function setIdChapter($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_idChapter = $id;
		}
	}	
	public function setPublish($publish)
	{
		if(is_string($publish))
		{
			$this->_publish = $publish;
		}
	}
	public function setAuthorChapter($author)
	{
		if(is_string($author))
		{
			$this->_authorChapter = $author;
		}
	}

	public function setTitleChapter($title)
	{
		if(is_string($title))
		{
			$this->_titleChapter = $title;
		}
	}

	public function setContentChapter($content)
	{
		if(is_string($content))
		{
			$this->_contentChapter = $content;
		}
	}

	public function setDateChapter($date)
	{
		$this->_date = $date;
	}

	public function setchapLibId($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_chapLibId = $id;
		}
	}

	// GETTERS
	public function getId()
	{
		return $this->_id;
	}

	public function getAuthor()
	{
		return $this->_author;
	}

	public function getTitle()
	{
		return $this->_title;
	}

	public function getResume()
	{
		return $this->_resume;
	}

	// CHAPTER
	public function getIdChapter()
	{
		return $this->_idChapter;
	}

	public function getAuthorChapter()
	{
		return $this->_authorChapter;
	}

	public function getTitleChapter()
	{
		return $this->_titleChapter;
	}

	public function getContentChapter()
	{
		return $this->_contentChapter;
	}

	public function getDateChapter()
	{
		return $this->_date;
	}

	public function getPublish()
	{
		return $this->_publish;
	}
	public function getLibId()
	{
		return $this->_chapLibId;
	}
}