<?php

class forgotpwd extends Controller {


	function __construct() {
		parent::__construct();		
	}
	
	function index() 
	{			
		$this->view->render('forgotpwd/index', $noinclude=true,0);
	}
    
}