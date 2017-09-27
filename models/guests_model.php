<?php

class Guests_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_guests()
	{
		$sth = $this->db->query("SELECT * FROM guest gus left join room_booking room on gus.entity_id = room.entity_id WHERE status = 'active' ORDER BY gus.datetime DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
}
?>