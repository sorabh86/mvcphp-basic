<?php 

/**
* 
*/
class View
{
	public $site_url = '/mvcphp';

	public function render($name) {
		require 'views/'.$name.'.tpl.php';
	}
}