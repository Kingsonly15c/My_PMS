<?php

class admin_dashboard_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_phone($entity_id)
	{
		$sth = $this->db->query("SELECT * FROM phone WHERE entity_id='$entity_id'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $rowss=$sth->row['phone'];
            return $rowss;
        }
	}
	public function get_email($entity_id)
	{
		$sth = $this->db->query("SELECT * FROM email WHERE entity_id='$entity_id'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $rowss=$sth->row['email'];
            return $rowss;
        }
	}
	public function get_address($entity_id)
	{
		$sth = $this->db->query("SELECT * FROM address WHERE entity_id='$entity_id'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $rowss=$sth->row['address'];
            return $rowss;
        }
	}
	public function get_fullname($entity_id)
	{
		$sth = $this->db->query("SELECT * FROM names WHERE entity_id='$entity_id'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $firstname =  $sth->row['firstname'];
            $lastname =  $sth->row['lastname'];
            $fullname = $lastname + ' ' + $firstname;
            return $fullname;
        }
	}
	public function chk_existing_username($username)
	{
		$sth = $this->db->query("SELECT * FROM admin WHERE username='$username'");
            $rowss=$sth->num_rows;
            return $rowss;
	}
	public function add_admin($username,$password,$fullname,$details,$email,$phone,$created_by_admin,$pic)
	{
		$sql = "INSERT INTO admin (username,password,fullname,details,email,phone,created_by_admin,pix)
			VALUES ('$username','$password','$fullname','$details','$email','$phone','$created_by_admin','$pic')";

		 $this->db->query($sql);		
	}
	public function chk_existing_admin($username)
	{
		$sth = $this->db->query("SELECT * FROM admin WHERE username='$username'");
            $rowss=$sth->num_rows;
            return $rowss;
	}
	public function update_username($update,$entity_id)
	{
		$sql = "UPDATE admin SET username = '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
	public function update_password($update,$entity_id)
	{
		$sql = "UPDATE admin SET password = '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
	public function update_firstname($update,$entity_id)
	{
		$sql = "UPDATE names SET firstname = '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
	public function update_lastname($update,$entity_id)
	{
		$sql = "UPDATE names SET lastname= '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
	public function update_email($update,$entity_id)
	{
		$sql = "UPDATE email SET email= '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
	public function update_phone($update,$entity_id)
	{
		$sql = "UPDATE phone SET phone= '$update' WHERE entity_id = '$entity_id'";
		$this->db->query($sql);
	}
}
?>