<?php

class Rooms extends Controller {

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
		$this->view->data['room']=$this->model->get_rooms();
		$this->view->data['country']=$this->model->get_countries();
		$this->view->data['state']=$this->model->get_states();
		$this->view->render('admin_dashboard/rooms', $noinclude=false, 2);		
	}

	function signout()
	{
		if (isset($_POST['room_number'])) {
			$room_number = $_POST['room_number'];
                $this->model->signout_room($room_number);
        header("location: ../rooms");
		}
	}
        function createBooking()
        {
function validate_input($data) {
    $data = trim($data);
    $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
                if (isset($_POST['room_number'])) {
                        $room_number = validate_input($_POST['room_number']);
                        $firstname = validate_input($_POST['firstname']);
                        $lastname = validate_input($_POST['lastname']);
                        $no_of_days = validate_input($_POST['no_of_days']);
                        $email = validate_input($_POST['email']);
                        $phone = validate_input($_POST['phone']);
                        $address = validate_input($_POST['address']);
                        $type = validate_input($_POST['type']);
                        $guest_type = validate_input($_POST['guest_type']);
                        $checkin = validate_input($_POST['checkin']);
                        $country_id = validate_input($_POST['country_id']);
                        $state_id = validate_input($_POST['state_id']);
                        $admin_id = $_SESSION['admin_id'];
						$entity_id = $this->model->GeraHash(4);
						$receipt_number = $this->model->GeraHash(4);
						$entity = 'guest';
						$status = 'active';
						$receipt_issue_date = date('Y-m-d H:i:s');
						$receipt_ref = $room_number;
                        $this->model->add_entity($entity_id,$entity);
                        $this->model->add_address($entity_id,$address,$state_id,$country_id);
                        $this->model->add_guest($entity_id,$guest_type,$status,$firstname,$lastname,$email,$phone);
                        $this->model->add_booking($entity_id,$room_number,$no_of_days,$receipt_number,$type,$checkin,$admin_id);
                        $this->model->add_receipt($receipt_number,$entity_id,$receipt_issue_date,$receipt_ref);
                        $this->model->update_room_stats($room_number);
        header("location: ../guest_receipt?receipt_number=$receipt_number");
                }}
}