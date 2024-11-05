<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Data_model'); // Load the model
    }

    // Function to fetch data based on button clicked
    public function fetch($category) {
        $data['results'] = $this->Data_model->get_data_by_category($category);
        $this->load->view('data_view', $data); // Load the view and pass the results
    }
}
?>
