<?php

class Users_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_users()
	{
		$sth = $this->db->query("SELECT * FROM admin adm left join address adr on adm.entity_id = adr.entity_id ORDER BY admin_id DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function add_admin($entity_id,$username,$password,$firstname,$lastname,$department,$access_level,$created_by_admin)
	{
		$sql = "INSERT INTO admin (entity_id,username,password,firstname,lastname,department,access_level,created_by_admin)
			VALUES ('$entity_id','$username','$password','$firstname','$lastname','$department','$access_level','$created_by_admin')";

		 $this->db->query($sql);		
	}
	public function chk_existing_admin($username)
	{
		$sth = $this->db->query("SELECT * FROM admin WHERE username='$username'");
            $rowss=$sth->num_rows;
            return $rowss;
	}
	public function add_entity($entity_id,$entity)
	{
		$sql = "INSERT INTO entity (entity_id,entity)
			VALUES ('$entity_id','$entity')";

		 $this->db->query($sql);		
	}
	public function add_address($entity_id,$address,$state_id,$country_id)
	{
		$sql = "INSERT INTO address (entity_id,address,state_id,country_id)
			VALUES ('$entity_id','$address','$state_id','$country_id')";

		 $this->db->query($sql);		
	}
	public function add_email($entity_id,$email)
	{
		$sql = "INSERT INTO email (entity_id,email)
			VALUES ('$entity_id','$email')";

		 $this->db->query($sql);		
	}
	public function add_phone($entity_id,$phone,$country_id)
	{
		$sql = "INSERT INTO phone (entity_id,phone,country_id)
			VALUES ('$entity_id','$phone','$country_id')";

		 $this->db->query($sql);		
	}
	public function GeraHash($qtd)
	{ 
		$xters = '0123456789'; 
		$QuantidadeCharacteres = strlen($xters); 
		$QuantidadeCharacteres--; 

		$Hash=NULL; 
    		for($x=1;$x<=$qtd;$x++){ 
        		$Posicao = mt_rand(0,$QuantidadeCharacteres); 
        		$Hash .= substr($xters,$Posicao,1); 
    		} 

			return $Hash; 
	}
}
?>