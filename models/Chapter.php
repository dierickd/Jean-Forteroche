<?php 

class Chapter extends Model
{
	private $_idChapter;
	private $_titleChapter;
	private $_contentChapter;
	private $_authorChapter;
	private $_date;
	private $_publish;
	private $_libraryId;

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
	public function setlibraryId($libraryId)
	{
		$libraryId = (int) $libraryId;
		if($libraryId > 0)
		{
			$this->_libraryId = $libraryId;
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

	public function getLibraryId()
	{
		return $this->_libraryId;
	}
}