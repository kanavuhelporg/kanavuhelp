<?php
class UserModel extends CI_Model
{
	public function store($data)
	{
		$this->db->insert('logintable', $data);
		return true;
	}
}
?>
