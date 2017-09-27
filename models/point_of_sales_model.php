<?php

class Point_of_sales_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_products()
	{
		$sth = $this->db->query("SELECT * FROM restaurant_product  WHERE status = 'in-stock' ORDER BY type DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function get_order_history()
	{
		$sth = $this->db->query("SELECT * FROM product_order ord left join names nam on ord.entity_id = nam.entity_id ORDER BY order_date DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
}
?>