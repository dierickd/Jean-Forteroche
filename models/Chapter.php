<?php 

class Chapter extends Model
{
	private $_idChapter;
	private $_titleChapter;
	private $_contentChapter;
	private $_authorChapter;
	private $_date;
	private $_publish;

	private $_libTitle;
	private $_libId;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	// SETTER
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
	//**************
	public function setTitle($libTitle)
	{
		if(is_string($libTitle))
		{
			$this->_libTitle = $libTitle;
		}
	}
	public function setLibId($idLib)
	{
		$idLib = (int) $idLib;
		if($idLib > 0)
		{
			$this->_libId = $idLib;
		}
	}	

	// GETTERS
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

	public function getTitleLib()
	{
		return $this->_libTitle;
	}
	public function getIdLib()
	{
		return $this->_libId;
	}
}