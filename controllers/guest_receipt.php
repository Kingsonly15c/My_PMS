<?php

class Guest_receipt extends Controller {

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
		if (isset($_GET['receipt_number'])) {
			$receipt_number = $_GET['receipt_number'];
		$this->view->data['subtotal']=$this->model->get_subtotal($receipt_number);
		$this->view->data['amount_paid']=$this->model->get_amount_paid($receipt_number);
		$amount_paid = $this->model->get_amount_paid($receipt_number);
		$subtotal = $this->model->get_subtotal($receipt_number);
		$service_charge = $subtotal * 0.1;
		$vat = $subtotal * 0.05;
		$consumption = $subtotal * 0.05;
		$grand_total = $subtotal + $service_charge + $vat + $consumption;
		$amount_paid = $this->model->get_amount_paid($receipt_number);
		$balance = $grand_total - $amount_paid;
		$this->view->data['balance']=$balance;
		$this->view->data['service_charge']=$service_charge;
		$this->view->data['vat']=$vat;
		$this->view->data['consumption']=$consumption;
		$this->view->data['grand_total']=$grand_total;
		$this->view->data['guest_info']=$this->model->get_guest_info($receipt_number);
		$this->view->data['booking_info']=$this->model->get_booking_info($receipt_number);
		}
		$this->view->render('admin_dashboard/guest_receipt', $noinclude=false, 2);

		
	}
}