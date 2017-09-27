<?php

class Readmail extends Controller {

	function __construct() {
		parent::__construct();
		
		Session::init();
		$logged = Session::get('loggedIn');
        
		$this->view->data['details']=Session::get('details');
		$this->view->data['username']=Session::get('username');
		$this->view->data['fullname']=Session::get('fullname');
		$this->view->data['email']=Session::get('email');
		$this->view->data['phone']=Session::get('phone');
		$this->view->data['pix']=Session::get('pix');
		$this->view->data['admin_id']=Session::get('admin_id');
		$this->view->data['unread']=Session::get('unread');
                $this->view->data['notif1']=Session::get('notif1');
                $this->view->data['notif2']=Session::get('notif2');
 
		if ($logged == false) {
			Session::destroy();
			header('location: admin_login');
			exit;
		}
	}
	
	function index() {
		if (isset($_GET['msg_id'])) {
			$msg_id = base64_decode(urldecode($_GET['msg_id']));
			$this->view->data['msg']=$this->model->get_msg($msg_id);
        $this->view->render('readmail/index',$noinclude=false, 3);
		}
	}
	
	function mark_as_read()
 	{
        if (isset($_POST['msg_id'])) {
        $msg_id = $_POST['msg_id'];
        $this->model->mark_msg_as_read($msg_id);
		$this->model->unread();
		header('location: ../mailbox');
	}
}
	
	
}