<?php

class Readmail_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_msg($msg_id)
	{
		$sth = $this->db->query("SELECT * FROM messages WHERE msg_id = '$msg_id'");
		$out_put=$sth->rows;
		return $out_put;
	}
	public function mark_msg_as_read($msg_id)
	{
		$sql = "UPDATE messages SET status = 'read' WHERE msg_id = '$msg_id'";

		 $this->db->query($sql);
	}
	public function unread()
	{
		$sql = $this->db->query("SELECT * FROM  messages WHERE status = 'unread'");
		$unread=$sql->num_rows;
			Session::set('unread', $unread);
	}
}
?>