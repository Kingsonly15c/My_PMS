<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		
	}
	
	function index() {
        $this->view->render('index/index',$noinclude=false,1);
	}
	

	function join_mailing_list()
 	{
        if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
        $check=$this->model->check_existing_email($email);
 		if($check>0){
			echo "You are already on our mailing list!"; // success message
			}else{
		$this->model->register_email($email);
			echo "Email successfully added to mailing list";
			}}
	else{
		echo "Email address is invalid";
	}
	}
}
	
}