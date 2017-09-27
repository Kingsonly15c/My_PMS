<?php
class Mailbox_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function old_msg()
	{
		$sth = $this->db->query("SELECT * FROM  messages WHERE status = 'read' ORDER BY msg_id DESC");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function new_msg()
	{
		$sth = $this->db->query("SELECT * FROM  messages WHERE status = 'unread' ORDER BY msg_id DESC");
		$out_put=$sth->rows;
		return $out_put;
	}

}
?>