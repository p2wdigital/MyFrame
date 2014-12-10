<?php 


namespace MyFrame\Core\Loader;

use Symfony\Component\Yaml\Parser;

/**
* 
*/
class Loader
{
	protected $config;
	
	public function __construct(){
		$yaml = new Parser();
		$this->config 	= 	$yaml->parse(file_get_contents("app/config/config.yaml"));
		var_dump($this->config);

	}
}