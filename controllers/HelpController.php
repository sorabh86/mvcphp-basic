<?php 

class HelpController extends Controller {
	function __construct(){
		parent::__construct();
		echo 'inside help <br>';
	}

	public function index() {
		$this->view->title = 'Help/Index';
		$this->view->render('help/index');
	}
	public function other($id = false) {
		$this->view->render('help/other');
	}
}

 ?>