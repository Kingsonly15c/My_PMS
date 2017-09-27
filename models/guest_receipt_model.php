<?php

class Guest_receipt_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_guest_info($receipt_number)
	{
		$sth = $this->db->query("SELECT * FROM receipt WHERE receipt_number = '$receipt_number'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $entity_id=$sth->row['entity_id'];
		$sth2 = $this->db->query("SELECT * FROM guest gus left join address adr on gus.entity_id = adr.entity_id WHERE gus.entity_id = '$entity_id'");
		$out_put=$sth2->rows;
		return $out_put;
        }
	}
	public function get_booking_info($receipt_number)
	{
		$sth = $this->db->query("SELECT * FROM receipt WHERE receipt_number = '$receipt_number'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $entity_id=$sth->row['entity_id'];
		$sth2 = $this->db->query("SELECT * FROM room_booking rbk left join guest gues on rbk.entity_id = gues.entity_id WHERE gues.entity_id = '$entity_id'");
		$out_put=$sth2->rows;
		return $out_put;
        }
	}
	public function get_amount_paid($receipt_number)
	{
		$sth = $this->db->query("SELECT * FROM receipt WHERE receipt_number = '$receipt_number'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $amount_paid=$sth->row['amount_paid'];
		return $amount_paid;
        }
	}
	public function get_subtotal($receipt_number)
	{
		$sth = $this->db->query("SELECT * FROM receipt WHERE receipt_number = '$receipt_number'");
		$count =  $sth->num_rows;
		if ($count > 0) {
            $receipt_ref=$sth->row['receipt_ref'];
            $sth2 = $this->db->query("SELECT * FROM rooms WHERE room_number = '$receipt_ref'");
            $count2 =  $sth2->num_rows;
		if ($count2 > 0) {
            $subtotal=$sth2->row['room_tariff'];
		return $subtotal;
        }
	}
	}
}
?>