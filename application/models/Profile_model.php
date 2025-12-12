<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function __construct() // Add this constructor
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getUserById($userId) {
        return $this->db->get_where('user', ['id' => $userId])->row_array();
    }

    public function updateUser($userId, $data) {
        $this->db->where('id', $userId);
        return $this->db->update('users', $data);
    }

    public function updateUserprofile($userId,$name,$age,$location,$phoneno) {
		$update = $this->db->query("UPDATE user SET name = '$name',location = '$location',mobileNumber = $phoneno,age = '$age' WHERE id = $userId");
	}
}
