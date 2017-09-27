<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function check_existing_email($email)
	{
		$sth = $this->db->query("SELECT * FROM mailing_list WHERE email='$email'");
            $rowss=$sth->num_rows;
            return $rowss;
	}
	public function register_email($email)
	{
		$sql = "INSERT INTO mailing_list (email)
			VALUES ('$email')";

		 $this->db->query($sql);
	}
}
?>