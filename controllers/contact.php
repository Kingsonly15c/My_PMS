<?php

class Contact extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() 
	{			
		$this->view->render('contact/index', $noinclude=false, 1);		
	}

	function sendmsg()
	{
function validate_input($data) {
    $data = trim($data);
    $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		if(isset($_POST['fullname'])){
			$fullname=validate_input($_POST['fullname']);
			$phone=validate_input($_POST['phone']);
			$email=validate_input($_POST['email']);
			$subject=validate_input($_POST['subject']);
			$message=validate_input($_POST['message']);	
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
			$check=$this->model->check_existing_message($message,$fullname);
 		if($check>0){
			echo "You have already sent this message!"; // success message
			}else{
			$this->model->add_msg($fullname,$phone,$email,$subject,$message);
			echo "Your message was sent!"; // success message
			}}
			else{
			echo "Invalid Email, please provide an correct email.";
			}
	}
	}
}