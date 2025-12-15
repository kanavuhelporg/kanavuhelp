<?php
class UserModel extends CI_Model
{
	public function __construct() // Add this constructor
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function store($data)
	{
		$this->db->insert('user', $data);
		return true;
	}
}
?>