<?php
session_start();

echo "<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";

define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); // retour la racine

define('RACINE', dirname(__FILE__)); // renvoi: ...la racine du site
define('DS', DIRECTORY_SEPARATOR); // renvoi: \
define('VIEW', RACINE . DS . 'views' . DS); //mène au dossier View
define('MODEL', RACINE . DS . 'models' . DS); //mène au dossier Model
define('CONTROLER', RACINE . DS . 'controllers' . DS); //mène au dossier Controler
define('PUB', RACINE . DS . 'public' . DS); //mène au dossier Public
define('BACK', RACINE . DS . 'backend' . DS); //mène au dossier Public

require_once CONTROLER . 'rooter.php';

$rooter = new Rooter();
$rooter->rooteReq();