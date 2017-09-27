<?php
class admin_login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function check_user($username,$password)
	{
		$sth = $this->db->query("SELECT * FROM  admin WHERE username ='$username' AND password = '$password'");
		$count =  $sth->num_rows;
		return $count;
	}
	public function login_user($username,$password)
	{
		$sth = $this->db->query("SELECT * FROM  admin WHERE username ='$username' AND password = '$password'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $admin_id =  $sth->row['admin_id'];
            $entity_id =  $sth->row['entity_id'];
		    $department=  $sth->row['department'];
		    $username=  $sth->row['username'];
		    $access_level=  $sth->row['access_level'];
			$photo = $sth->row['photo'];

			Session::init();
			Session::set('loggedIn', true);
			Session::set('admin_id', $admin_id);
			Session::set('entity_id', $entity_id);
			Session::set('department', $department);
			Session::set('username', $username);
			Session::set('access_level', $access_level);
			Session::set('photo', $photo);
           // echo '<script> location.replace("../dashboard"); </script>';
		}	
	}
	public function unread()
	{
		$sql = $this->db->query("SELECT * FROM  messages WHERE status = 'unread'");
		$unread=$sql->num_rows;
			Session::set('unread', $unread);
	}
}
?>