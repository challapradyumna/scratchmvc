<?php   
 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
 
$url = $_GET['url'];
require_once(ROOT.DS.'lib'.DS.'config.php');
require_once (ROOT.DS.'lib' . DS . 'bootstrap.php');
$app = new app;