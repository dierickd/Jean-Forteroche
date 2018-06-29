<?php

class ctrlPassManager extends Model {
	public function getPass() {
		$sql =
			'SELECT user, pass, mail
		FROM connect';

		return $this->getAll($sql, 'ctrlPass');
	}
}
