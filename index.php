<?php   
 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

require_once(ROOT.DS.'lib'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'routes.php');
require_once(ROOT.DS.'lib' . DS . 'bootstrap.php');
Route::add('login','login@BaseController');
print_r(Route::ret_routes());
$app = new app;