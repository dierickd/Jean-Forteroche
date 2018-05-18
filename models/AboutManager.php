<?php 

class AboutManager extends Model
{
	public function getAbout()
	{
		$sql = 'SELECT idJf, nameJf, titleJf, contentJf
		FROM about';
		return $this->getAll($sql, 'about');
	}
}

