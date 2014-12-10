<?php 

namespace MyFrame\Core\Container;

abstract class Container{
	protected static $container = array();

	public function setContainer($name, $container)
	{
		self::$container[$name] = $container;
		var_dump(self::$container);
		echo "Acabou";
	}

	
}