<?php

class Receipts_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_receipts()
	{
		$sth = $this->db->query("SELECT * FROM receipts ORDER BY receipt_id DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
}
?>