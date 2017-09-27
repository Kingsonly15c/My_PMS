<?php

class Pricing extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() 
	{
		$this->view->render('pricing/index', $noinclude=false, 1);

		
	}
}