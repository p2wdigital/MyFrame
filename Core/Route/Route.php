<?php 

namespace MyFrame\Core\Route;

use \ReflectionMethod;
use MyFrame\Core\HttpRequest\Request;
use MyFrame\Core\Container\Container;
class Route extends Container
{
	/**
	 * [Resolve a rota solitada pelo navegador]
	 * @return [type] [description]
	 */
	public function resolve()
	{
				
		$management = new RouteManagement(new RouteGenerate(), new Request());
		$management->getRoute();
		var_dump(self::$container);

		/*$routes = $route->getRoute();
		$path = rtrim($_SERVER['PATH_INFO'],"/");
		
		foreach ($routes as $key => $value) {
			if(strpos($value['route'], strtolower($path)) !==false):
				
				$run = $value['namespace'] . "\\". $value['class'];
				$action = $value['action'] ;
				$controller = new $run;
				//$ref = new \ReflectionParameter(array($run, $action),0);
				$ref = new \ReflectionMethod($run, $action);
				//var_dump(get_class_methods($ref));
				//$ref->getParameters();
				//var_dump($ref->returnsReference());
				//call_user_method(method_name, obj)
				$controller->$action();
				
				break;
			endif;
		}		
		//echo preg_replace ("/$", "", "admin/");
		//echo preg_replace("/\/$/", "", "admin/teste/");
		var_dump($route->getRoute());
*/
	}


}