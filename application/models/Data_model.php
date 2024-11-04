<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    // Function to get data based on category
    public function get_data_by_category($category) {
        $this->db->where('category', $category);
        $query = $this->db->get('kanavu_help');
        return $query->result(); // Returns the results as an array of objects
    }
}
?>
