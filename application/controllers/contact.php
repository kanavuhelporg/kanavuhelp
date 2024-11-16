<?php
class Contact extends CI_Controller {

    // Load the contact form view
    public function index() {
        $this->load->view('contact_form');
    }

    // Handle form submission
    public function submit() {
        $this->load->model('Contact_model');

        // Get form data
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        );

        // Insert data into the database
        if ($this->Contact_model->insert_contact_data($data)) {
            // Redirect to a success page or show a success message
            redirect('contact/success');
        } else {
            // Handle failure (e.g., show error message)
            redirect('contact/failure');
        }
    }
}
