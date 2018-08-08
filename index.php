<?php
session_start();
define('URL', isset($_SERVER['HTTPS']) ? "https" : "http" . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['SCRIPT_NAME'])); // retour la racine

define('RACINE', dirname(__FILE__)); // renvoi: ...la racine du site
define('DS', DIRECTORY_SEPARATOR); // renvoi: \
define('VIEW', RACINE . DS . 'views' . DS); //mène au dossier View
define('MODEL', RACINE . DS . 'models' . DS); //mène au dossier Model
define('CONTROLER', RACINE . DS . 'controllers' . DS); //mène au dossier Controler
define('PUB', RACINE . DS . 'public' . DS); //mène au dossier Public
define('BACK', RACINE . DS . 'backend' . DS); //mène au dossier Public
define('CORE', RACINE . DS . 'core' . DS); //mène au dossier core

require CORE . 'includes.php';

$timer = microtime();

new Dispatcher();

?>
<!-- <div class="info-time navbar-fixed-bottom">
	<p>Chargement en: <?=$newtime = microtime(FALSE) - $timer?> seconde(s)</p>
</div> -->
