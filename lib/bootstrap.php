<?
class app
{
    public $segments;
    public function __construct()
    {
    	global $segments;
        $this->segments();
        $route = $this->segments[3];
        Route::search($route);
        if($route == 0)
        {
        	include(ROOT.DS.'app'.DS.'controllers'.DS.'BaseController.php');
        	$page = new BaseController;
        	$page->p404();
        }
        else
        {
        	$controller = explode('@',$route);
        	include(ROOT.DS.'app'.DS.'controllers'.DS.$controller[1].'.php');
        	$page = new $controller[1];
        	$page->$controller[0]();	
        }
        
    }
    private function segments()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->segments = explode('/', $url);
    }
}