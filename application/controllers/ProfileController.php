<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model that interacts with the database
        $this->load->model('UserModel');
        // Load form validation library
        $this->load->library('form_validation');
    }

    // Method to display the profile editing form
    public function editProfile() {
        // Check if user is logged in
        if (!$this->session->userdata('userId')) {
            redirect('login');  // Redirect to login page if not logged in
        }

        // Get user data from the database using userId from session
        $userId = $this->session->userdata('userId');
        $data['user'] = $this->UserModel->getUserById($userId);

        // Load the profile edit view and pass the user data
        $this->load->view('profile_edit', $data);
    }

    // Method to handle the profile update
    public function updateProfile() {
        // Check if user is logged in
        if (!$this->session->userdata('userId')) {
            redirect('login');  // Redirect to login page if not logged in
        }

        // Set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the profile edit form with error messages
            $this->editProfile();
        } else {
            // If validation passes, update the user data
            $userId = $this->session->userdata('userId');
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),  // Encrypt password
            );

            // Call model method to update the user data
            $this->UserModel->updateUser($userId, $data);

            // Redirect to profile page after update
            $this->session->set_flashdata('success', 'Profile updated successfully!');
            redirect('profile/view');  // Assuming you have a profile/view page
        }
    }
}
?>
