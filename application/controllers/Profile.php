<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function viewProfile() {
        $userId = $this->session->userdata('Kanavu_userId');
        if (!$userId) {
            redirect('login'); // Redirect to login if not logged in
        }

        $user = $this->Profile_model->getUserById($userId);

        $this->load->view('profile_view', array("user"=>$user));
    }

    public function editProfile() {
        $userId = $this->session->userdata('user_id');
        if (!$userId) {
            redirect('login'); // Redirect to login if not logged in
        }

        $data['user'] = $this->Profile_model->getUserById($userId);

        $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('profile_edit', $data);
        } else {
            $updatedData = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
            ];

            $password = $this->input->post('password');
            if (!empty($password)) {
                $updatedData['password'] = password_hash($password, PASSWORD_BCRYPT);
            }

            if ($this->Profile_model->updateUser($userId, $updatedData)) {
                $this->session->set_flashdata('success', 'Profile updated successfully.');
                redirect('profile/viewProfile');
            } else {
                $this->session->set_flashdata('error', 'Failed to update profile. Please try again.');
                redirect('profile/editProfile');
            }
        }
    }

    public function updateUser() {
        if(!$this->session->userdata("Kanavu_userId")) {
            redirect("login");
        }
        $userId = $this->input->post("userId");
        $name = $this->input->post("name");
        $age = $this->input->post("age");
        $location = $this->input->post("location");
        $phoneno = $this->input->post("phone");

        $updateUser = $this->Profile_model->updateUserprofile($userId,$name,$age,$location,$phoneno);
        if(!$updateUser) {
            // $this->session->set_userdata("updatestatus","Unexpected error occur please try again");
            redirect("profile_view");
        }
        else {
            // $this->session->set_userdata("updatestatus","Successfully updated");
            redirect("profile_view");
        }
    }
}
