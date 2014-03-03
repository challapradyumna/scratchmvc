<?php   
 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

require_once(ROOT.DS.'lib'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'routes.php');
require_once (ROOT.DS.'lib' . DS . 'bootstrap.php');
$app = new app;