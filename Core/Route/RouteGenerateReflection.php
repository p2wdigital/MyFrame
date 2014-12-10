<?php


namespace MyFrame\Core\Route;

use Symfony\Component\Finder\Finder;
use \ReflectionClass;

class RouteGenerateReflection
{
	private $route = array();

	public function __construct(){
		$finder = new Finder();
		$finder->name("*Controller.php");
		$finder->files()->in(DIR."/src");
		
		foreach ($finder as $key => $value):
			//var_dump($value);
			//var_dump(get_class_methods($value));
			//$this->route = array_merge( $this->route, $this->handleFile($value->getRelativePathname()) );
			$this->handleFile($value->getRelativePathname());
		endforeach;

		return $this;
	}

	public function handleFile($file){
		//echo $file;
		$file 	= rtrim($file, ".php");
		echo $file;
		$class 	= new $file;
		$ref 	= new ReflectionClass($class);


		var_dump(get_class_methods($ref->getDocComment()));
		var_dump(get_class_methods($ref));

		
	}
}