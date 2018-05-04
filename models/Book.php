<?php 

class Book extends Model
{
	private $_id;
	private $_title;
	private $_resume;
	private $_author;

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
}