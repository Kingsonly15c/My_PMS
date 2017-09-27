<?php

class Users extends Controller {

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
		$this->view->data['admin']=$this->model->get_users();
		$this->view->render('admin_dashboard/users', $noinclude=false, 2);		
	}

        function createAdmin()
        {
function validate_input($data) {
    $data = trim($data);
    $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
                if (isset($_POST['username'])) {
                        $username = validate_input($_POST['username']);
                        $address = validate_input($_POST['address']);
                        $password = validate_input($_POST['password']);
                        $department = validate_input($_POST['department']);
                        $firstname = validate_input($_POST['firstname']);
                        $lastname = validate_input($_POST['lastname']);
                        $email = validate_input($_POST['email']);
                        $phone = validate_input($_POST['phone']);
                        $created_by_admin = $_SESSION['admin_id'];
                        $access_level = $_POST['access_level'];
                        $state_id=1;
                        $country_id=156;
						$entity_id = $this->model->GeraHash(4);
						$entity = 'admin';
                        $check = $this->model->chk_existing_admin($username);
                        if ($check>0){
                        	echo "Username already Exists, Choose Another! <a href='../users'>Go Back</a>";
                        }else{
                        $this->model->add_entity($entity_id,$entity);
                        $this->model->add_phone($entity_id,$phone,$country_id);
                        $this->model->add_email($entity_id,$email);
                        $this->model->add_address($entity_id,$address,$state_id,$country_id);
                        $this->model->add_admin($entity_id,$username,$password,$firstname,$lastname,$department,$access_level,$created_by_admin);
        header("location: ../users");
                }}
                }
       
}