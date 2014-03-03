<?php 
class routes
{
	public $routes;
	public function __construct()
	{
		$this->routes['login'] = 'login@BaseController';
		$this->routes['user'] = 'user@BaseController';
	}
	public function search($r)
	{
		$is_route = array_search($r, array_keys($this->routes));
		if($is_route)
		{
			return $this->routes[$r];	
		}
		else
		{
			return 0;
		}
	}
	
}
