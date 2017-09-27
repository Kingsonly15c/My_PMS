<?php

class Mailbox extends Controller {

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
	
	function index() 
	{	
		$this->view->data['old_msg']=$this->model->old_msg();
		$this->view->data['new_msg']=$this->model->new_msg();
		$this->view->render('mailbox/index', $noinclude=false, 3);
	}
}