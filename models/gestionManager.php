<?php

class gestionManager extends Model {
	public function getGestion() {
		$sql =
			'SELECT user, pass, mail
		FROM connect';

		return $this->getAll($sql, 'ctrlPass');
	}
}
