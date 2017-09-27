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
	public function get_sources($limit)
	{
		$sth = $this->db->query("SELECT * FROM sources ORDER BY source_id DESC LIMIT $limit");
		$out_put=$sth->rows;
        
		return $out_put;
	}
	public function get_justin($limit)
	{
		$sth = $this->db->query("SELECT * FROM all_posts ORDER BY post_id DESC LIMIT $limit");
		$out_put=$sth->rows;
        
		return $out_put;
	}
	public function get_recent_posts($limit)
	{
		$sth1 = $this->db->query("SELECT * FROM all_posts");
		$num=$sth1->num_rows-4;
		$sth = $this->db->query("SELECT * FROM all_posts WHERE post_id <= $num ORDER BY post_id DESC LIMIT $limit");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function get_num_cat1()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'ENTERTAINMENT'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat2()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'FASHION'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat3()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'HEALTH'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat4()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'MUSIC'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat5()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'NEWS'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat6()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'SPORTS'");
		$num=$sth->num_rows;
		return $num;		
	}
	public function get_num_cat7()
	{
		$sth = $this->db->query("SELECT * FROM all_posts WHERE category = 'CULTURE'");
		$num=$sth->num_rows;
		return $num;		
	}
}
?>