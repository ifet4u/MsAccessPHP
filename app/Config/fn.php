<?php
// MVC functions
function view($url,$data = null){ // basic View Function with extracted data

	extract($data);

	include __DIR__."/../View/$url.php";
}

function dd($str){ // basic dd function mainly used for debuging

	print('<pre>');
	print_r($str);
	print('</pre>');
	die();
}

function rr($link) // simple redirect function
{ 
	header("Location: ".$link);
	exit;
}


