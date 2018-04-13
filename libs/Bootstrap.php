<?php 

/**
* 
*/
class Bootstrap {
	
	function __construct() {
		$url = $_GET['url'];
		$url = rtrim($url,'/');
		$url = explode('/', $url);

		// print_r($url);

		$file = 'controllers/'.$url[0].'Controller.php';
		if(file_exists($file)){
			require $file;	
		} else {
			throw new Exception("The file: $file Does not exists.");
		}

		$class = ucfirst($url[0].'Controller');
		$controller = new $class;

		if(isset($url[2])) {
			$controller->{$url[1]}($url[2]);
		} else if(isset($url[1])) {
			$controller->{$url[1]}();
		} else {
			$controller->{'index'}();
		}
	}
}
 ?>