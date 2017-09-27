<?php

class Point_of_sales extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
        
		$this->view->data['department']=Session::get('department');
		$this->view->data['username']=Session::get('username');
		$this->view->data['access_level']=Session::get('access_level');
		$this->view->data['entity_id']=Session::get('entity_id');
		$this->view->data['photo']=Session::get('photo');
		$this->view->data['admin_id']=Session::get('admin_id');
 
		if ($logged == false) {
			Session::destroy();
			header('location: admin_login');
			exit;
		}
	}
	
	function index() 
	{
		$this->view->data['product']=$this->model->get_products();
		$this->view->data['order_history']=$this->model->get_order_history();
		$this->view->render('admin_dashboard/point_of_sales', $noinclude=false, 2);

		
	}
}