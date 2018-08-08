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
}

echo "<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";