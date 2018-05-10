<?php 

abstract class Model
{
	private static $_bdd;

	private static function setBdd()
	{
		self::$_bdd = new PDO('mysql:host=localhost;dbname=bddp4;charset=utf8','root', '');
		self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}

	protected function getBdd()
	{
		if(self::$_bdd == null)
			{
				self::setBdd();
			}
		return self::$_bdd;
	}

	protected function getAll($sql, $object)
	{
		$var = [];
		$req = $this->getBdd()->query($sql);
		$req->execute();
		while($data = $req->fetch(PDO::FETCH_ASSOC))
		{
			$var[] = new $object($data);
		}
		return $var;
		$req->closeCursor();
	}

	protected function setData()
	{
		
	}

	protected function hydrate(array $data)
	{
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}
}