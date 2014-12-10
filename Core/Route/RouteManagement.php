<?php


namespace MyFrame\Core\Route;
use MyFrame\Core\Container\Container;
/**
* 
*/
class RouteManagement extends Container
{
	/**
	 * [$routes Todas as rotas]
	 * @var [type]
	 */
	private $routes;
	/**
	 * [$request Objeto Request]
	 * @var [type]
	 */
	private $request;
	/**
	 * [$route Rota correspondida]
	 * @var array
	 */
	private $route = array();

	private $path;

	private $match;

	public function __construct(RouteGenerate $routes, $request){
		$this->routes 	= $routes;
		$this->request 	= $request;
		return $this;
	}


	public function getRoute(){
		if($this->route !== array()) return $this->route();

		$this->findRoute();
	}

	public function findRoute(){

		$this->path 	= rtrim($this->request->getPathInfo(),"/");
		$routes 		= $this->routes->getRoute();
		$newArray = array_filter($routes, array($this,"validateRoutes"));
	}


	function validateRoutes($value){
		$routeClear = preg_replace("/(\/\{.*?\})|(\/$)/", "", $value['route']);



		return false;
	}

//Route /admin/      			rota= /admin/
//Route /admin/view/{id} 		rota= /admin/view/1

}