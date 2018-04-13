<?php 

class index extends Controller {
	function __construct(){
		parent::__construct();
		echo 'inside index';
	}

	public function index () {
		echo 'inside of index:index';
	}
}


 ?>