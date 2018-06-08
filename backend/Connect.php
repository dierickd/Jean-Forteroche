<?php 
if (!isset($_SESSION)) { session_start(); }



foreach ($pass as $ctrl) {
	$passTest = strtoupper(sha1($_POST['password']));

	if($_POST['login'] == $ctrl->getUser())
	{
		if($passTest == $ctrl->getPass())
		{
			unset($_SESSION['error']);
			$this->_view = new View('dashboard');
			$this->_view->generate(array());
			break;
		} else
		$_SESSION['error'] = 'error';
		header('Location: '.URL.'admin');
	} else
	$_SESSION['error'] = 'error';
	header('Location: '.URL.'admin');
}
