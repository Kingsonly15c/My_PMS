<?php

class Contact_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function check_existing_message($message,$fullname)
	{
		$sth = $this->db->query("SELECT * FROM messages WHERE message='$message' AND fullname='$fullname'");
            $rowss=$sth->num_rows;
            return $rowss;
	}
	public function add_msg($fullname,$phone,$email,$subject,$message)
	{
		$sql = "INSERT INTO messages (fullname,phone,email,subject,message)
			VALUES ('$fullname','$phone','$email','$subject','$message')";

		 $this->db->query($sql);
	}
}
?>