<?php 

require_once VIEW.'View.php';

Class Rooter
{
	private $_ctrl;
	private $_view;

	public function rooteReq()
	{
		try
		{
			//CHARGEMENT AUTO DES CLASSES MODELS
			spl_autoload_register(function($class){
				require_once(MODEL.$class.'.php');
			});

			$url = '';
			if (isset($_GET['action']))
			{
				$url = explode('/', filter_var($_GET['action'], FILTER_SANITIZE_URL));
				$controller = ucfirst(strtolower($url[0]));
				$controllerClass = "controller".$controller;
				$controllerFile = CONTROLER.$controllerClass.".php";

				if(file_exists($controllerFile))
				{
					require_once $controllerFile;
					$this->_ctrl = new $controllerClass($_GET);
				}
				else 
					throw new Exception('Page introuvable');
			}
			else
			{
				require_once CONTROLER.'ControllerHome.php';
				$this->_ctrl = new controllerHome($url);
			}
		}
		catch (Exception $e)
		{
			$errorMsg = $e->getMessage();
			$this->_view = new View('Error');
			$this->_view->generate(array('errorMsg' => $errorMsg));
		}
	}

	private function url($url)
	{

	}
}