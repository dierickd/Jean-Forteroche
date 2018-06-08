<?php 
if (!isset($_SESSION)) { 
	session_start(); 
}

$logSecure = htmlspecialchars($_POST['login']);
$passSecure = htmlspecialchars($_POST['password']);
$passTest = strtoupper(sha1($passSecure));

foreach ($pass as $ctrl) {
	if($logSecure == $ctrl->getUser())
	{
		if($passTest == $ctrl->getPass())
		{
			unset($_SESSION['error']);
			header('Location: '.URL.'admin/dashboard');

			break;
		} else
			$_SESSION['error'] = 'error';
			header('Location: '.URL.'admin');
	} else
		$_SESSION['error'] = 'error';
		header('Location: '.URL.'admin');
}
