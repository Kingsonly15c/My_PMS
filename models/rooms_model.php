<?php

class Rooms_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function update_room_stats($room_number)
	{
		$sql = "UPDATE rooms SET status = 'occupied' WHERE room_number = '$room_number'";
		 $this->db->query($sql);
	}
	public function signout_room($room_number)
	{
		$sql = "UPDATE rooms SET status = 'vacant-but-dirty' WHERE room_number = '$room_number'";
		 $this->db->query($sql);
	}
	public function signout_guest($room_number)
	{
		$sth = $this->db->query("SELECT * FROM room_booking WHERE room_number = '$room_number'");
		$count =  $sth->num_rows;
		if ($count > 0) {
			$sth2 = $this->db->query("UPDATE guest SET status = 'inactive' WHERE room_number = '$room_number'");
		$sql = "UPDATE rooms SET status = 'vacant-but-dirty' WHERE room_number = '$room_number'";
		 $this->db->query($sql);
		}
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
	public function add_guest($entity_id,$guest_type,$status,$firstname,$lastname,$email,$phone)
	{
		$sql = "INSERT INTO guest (entity_id,guest_type,status,firstname,lastname,email,phone)
			VALUES ('$entity_id','$guest_type','$status','$firstname','$lastname','$email','$phone')";

		 $this->db->query($sql);		
	}
	public function add_booking($entity_id,$room_number,$no_of_days,$receipt_number,$type,$checkin,$admin_id)
	{
		$sql = "INSERT INTO room_booking (entity_id,room_number,no_of_days,receipt_number,type,checkin,admin_id)
			VALUES ('$entity_id','$room_number','$no_of_days','$receipt_number','$type','$checkin','$admin_id')";

		 $this->db->query($sql);		
	}
	public function add_receipt($receipt_number,$entity_id,$receipt_issue_date,$receipt_ref)
	{
		$sql = "INSERT INTO receipt (receipt_number,entity_id,receipt_issue_date,receipt_ref)
			VALUES ('$receipt_number','$entity_id','$receipt_issue_date','$receipt_ref')";

		 $this->db->query($sql);		
	}
	public function get_rooms()
	{
		$sth = $this->db->query("SELECT * FROM rooms ORDER BY room_id ASC");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function get_countries()
	{
		$sth = $this->db->query("SELECT * FROM countries ORDER BY country_id ASC");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function get_states()
	{
		$sth = $this->db->query("SELECT * FROM states ORDER BY state_id ASC");
		$out_put=$sth->rows;
		return $out_put;
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