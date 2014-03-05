<?php 
class Route
{
	public static $routes;
	public static function search($r)
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
	public static function add($route,$method)
	{
	    $routes[$route] = $method;
	}
	public static function ret_routes()
	{
	    return $routes;
	}
}