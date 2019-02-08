<?php

class Conf {

	static $debug = 1;

	static $databases = array(
		'default' => array(
			'host' => 'localhost',
			'database' => 'bddp4',
			'login' => 'root',
			'password' => '',
		),
	);

	static function debug($data) {
		echo '<div class="container">';
		echo '<pre style="background:#f7e9e3;color="#0e0220">';
		echo '<p>';
		print_r($data);
		echo "</p>";
		echo "</pre>";
		echo "</div>";
	}
}
