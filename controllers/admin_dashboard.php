<?php

class admin_dashboard extends Controller {

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
                if (isset($_SESSION['entity_id'])) {
                       $entity_id = $_SESSION['entity_id'];
                $this->view->data['phone']=$this->model->get_phone($entity_id);
                $this->view->data['email']=$this->model->get_email($entity_id);
                $this->view->data['address']=$this->model->get_address($entity_id);
                $this->view->data['fullname']=$this->model->get_fullname($entity_id);
                }
		$this->view->render('admin_dashboard/index', $noinclude=false, 2);
	}

        function create_admin()
        {
                if (isset($_POST['username'])) {
                        $username = trim(stripslashes(htmlspecialchars($_POST['username'])));
                        $password = trim(stripslashes(htmlspecialchars($_POST['password'])));
                        $details = trim(stripslashes(htmlspecialchars($_POST['details'])));
                        $fullname = trim(stripslashes(htmlspecialchars($_POST['fullname'])));
                        $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
                        $phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
                        $created_by_admin = $_SESSION['admin_id'];
                        $pic=($_FILES['photo']['name']);
                        $target = "c:/xampp/htdocs/tobtos/public/images/admin/";
                        $target = $target . basename( $_FILES['photo']['name']);
                        $check = $this->model->chk_existing_username($username);
                        if ($check>0){echo "Username already Exists, Choose Another! <a href='../admin_dashboard'>Back To Dashboard</a>";
                        }else{
                        $check2 = $this->model->chk_existing_admin($username);
                        if ($check2 > 0){echo "Admin already Exists, Create Another! <a href='../admin_dashboard'>Back To Dashboard</a>";
                        }else{
                        $this->model->add_admin($username,$password,$fullname,$details,$email,$phone,$created_by_admin,$pic);
                        if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

// Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
        header("location: ../admin_dashboard");
                }}
                }
        }

        function update_info()
        {                            
                if(isset($_POST['update_field'])) {
                        $entity_id=$_SESSION['entity_id'];
                        $update_field=$_POST['update_field'];
                        $update=htmlspecialchars($_POST['update']);
                        if ($_POST['update_field'] == 'username'){
                        $check=$this->model->check_existing_username($update);
                        if($check>0){
                        echo "Username already exists";
                        }else{
                        $this->model->update_username($update,$entity_id);
                        Session::set('username', $update);
                        header("location: ../admin_dashboard");
                        }}
                        elseif ($_POST['update_field'] == 'password') {
                        $this->model->update_password($update,$entity_id);
                        Session::set('password', $update);
                        header("location: ../admin_dashboard");
                        }elseif ($_POST['update_field'] == 'firstname') {
                        $this->model->update_firstname($update,$admin_id);
                        header("location: ../admin_dashboard");
                        }
                        elseif ($_POST['update_field'] == 'lastname') {
                        $this->model->update_lastname($update,$entity_id);
                        header("location: ../admin_dashboard");
                        }
                        elseif ($_POST['update_field'] == 'email') {
                        $this->model->update_email($update,$entity_id);
                        header("location: ../admin_dashboard");
                        }
                        elseif ($_POST['update_field'] == 'phone') {
                        $this->model->update_phone($update,$entity_id);
                        header("location: ../admin_dashboard");
                        }}
                }
}