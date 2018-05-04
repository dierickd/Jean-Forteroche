<?php 

class Comment extends Model
{
	private $_idComment;
	private $_contentComment;
	private $_authorComment;
	private $_dateComment;
	private $_valCom;
	private $_chapId;

	public function __construct(array $data)
	{
		$this->hydrate($data);
		var_dump($data);
	}

	// SETTER
	public function setIdComment($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_idComment = $id;
		}
	}
	public function setChapterId($idC)
	{
		$idC = (int) $idC;
		if($idC > 0)
		{
			$this->_chapId = $idC;
		}
	}
	public function setAuthorComment($author)
	{
		if(is_string($author))
		{
			$this->_authorComment = $author;
		}
	}
	public function setValComment($validate)
	{
		if(is_string($validate))
		{
			$this->_valCom = $validate;
		}
	}
	public function setContentComment($content)
	{
		if(is_string($content))
		{
			$this->_contentComment = $content;
		}
	}
	public function setDateComment($date)
	{
		$this->_dateComment = $date;
	}

	// GETTERS
	public function getIdComment()
	{
		return $this->_idComment;
	}
	public function getAuthorComment()
	{
		return $this->_authorComment;
	}
	public function getValidate()
	{
		return $this->_valCom;
	}
	public function getContentComment()
	{
		return $this->_contentComment;
	}
	public function getDateComment()
	{
		return $this->_dateComment;
	}
	public function getChapId()
	{
		return $this->_chapId;
	}
}