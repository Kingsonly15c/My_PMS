<?php

class admin_login extends Controller {


	function __construct() {
		parent::__construct();		
	}
	
	function index() 
	{			
		$this->view->render('admin_login/index', $noinclude=true,0);
	}
    
 	function login()
 	{
function validate_input($data) {
    $data = trim($data);
    $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 		if(isset($_POST['username'])){
        $username=validate_input($_POST['username']);
		$password=validate_input($_POST['password']);
		$check = $this->model->check_user($username,$password);
		if ($check>0) {
			$this->model->login_user($username,$password);
		header("location: ../admin_dashboard");
		}
		else{
			header("location: ../forgotpwd");
		}

 	}
}
}