<?php

$directory = [ 
	'/Controller/',
	'/Model/'
	];

function auto($url){

	global $directory;

	foreach($directory as $dir)
	{
		$class = __DIR__. $dir . $url. ".php";

		if(file_exists($class)) {
			require_once $class;
		}
	}

}

spl_autoload_register('auto');

