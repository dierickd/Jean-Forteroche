<?php 

class Comment extends Model
{
	private $_idCom;
	private $_contentCom;
	private $_authorCom;
	private $_dateCom;
	private $_valCom;
	private $_chapId;

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	// SETTER
	public function setIdComment($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_idCom = $id;
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
			$this->_authorCom = $author;
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
			$this->_contentCom = $content;
		}
	}
	public function setDateComment($date)
	{
		$this->_dateCom = $date;
	}

	// GETTERS
	public function getIdComment()
	{
		return $this->_idCom;
	}
	public function getAuthorComment()
	{
		return $this->_authorCom;
	}
	public function getValidate()
	{
		return $this->_valCom;
	}
	public function getContentComment()
	{
		return $this->_contentCom;
	}
	public function getDateComment()
	{
		return $this->_dateCom;
	}
	public function getChapId()
	{
		return $this->_chapId;
	}
}