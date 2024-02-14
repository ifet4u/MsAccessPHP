<?php 
require_once __DIR__ . '/../Config/config.php';
require_once __DIR__.'/../Config/fn.php';
require_once __DIR__.'/../Config/Helpers/helper.php';


class App 
{
	public function run()
	{
		$uri = explode('/',$_SERVER['REQUEST_URI']);
		// you can change numerics of $uri array if you use app in subfolder
		$class  = !empty($uri[1]) ? $uri[1] : 'Home';
		$method = !empty($uri[2]) ? $uri[2] : 'index';
		$id     = !empty($uri[3]) ? $uri[3] : null;


		if (class_exists($class)) {
	    $app = new $class;
		    if (method_exists($app, $method)) {
			    $app->$method($id);
			} else {
			    // Provera Metode
			    view('errors/_404',[
			    	'msg' => 'Autoroute <code>/'.$class.'/'.$method.'</code> does not exists. <br>Check Controller name and Method'
			    ]);
			     
			}
		} else {
		    // Provera klase
		    view('errors/_404',[
			    	'msg' => 'Autoroute <code>/'.$class.'/'.$method.'</code> does not exists. <br>Check Controller name'
			    ]);
		     
		}

	}
}