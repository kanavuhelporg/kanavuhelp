<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function getUserById($userId) {
        $query = $this->db->get_where('users', ['id' => $userId]);
        return $query->row_array();
    }
    

    public function updateUser($userId, $data) {
        $this->db->where('id', $userId);
        return $this->db->update('users', $data);
    }
    
}
