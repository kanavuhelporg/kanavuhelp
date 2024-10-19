<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kanavuhelp extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('cookie');

    }
    public function index()
    {
        $this->load->view('kanavuhome.php');
    }
    public function kanavuhome()
    {
        $this->load->view('kanavuhome.php');
    }
    public function register()
    {
        $this->load->view('register.php');
    }
    public function login()
    {
        $this->load->view('login.php');
    }
    public function individual()
    {
        $this->load->view('individual.php');
    }
    public function charity()
    {
        $this->load->view('charity.php');
    }
    public function donate()
    {$data['category']=$this->UserModel->get_category();
        $data['fundraisers'] = $this->UserModel->get_cause_details();

        $this->load->view('donate.php', $data);
    }
    public function myhelps()
    {
        $this->load->view('myhelps.php');
    }
    public function blogs()
    {
        $this->load->view('blogs.php');
    }
    public function contactus()
    {
        $this->load->view('contactus.php');
    }
    public function abouts()
    {
        $this->load->view('abouts.php');
    }
    public function helpus()
    {
        $this->load->view('helpus.php');
    }
    public function registeration()
    {
        $data['name'] = $this->input->post('exampleInputName');
        $data['email'] = $this->input->post('exampleInputEmail1');
        $data['password'] = $this->input->post('exampleInputPassword1');
        $this->load->model('UserModel');
        $response = $this->UserModel->store1($data);
        if ($response == true) {
            // echo '<script>alert("Succesfully registered")</script>';
            $this->load->view('login');
        } else {
            echo 'Failed to register';
        }

    }
    public function userLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->UserModel->loginUser();

        if (isset($login[0]['id'])) {
            // Set session data for the logged-in user
            $userLoggedIn = array(
                'userId' => $login[0]['id'],
                'userName' => $login[0]['name'],
            );
            $this->session->set_userdata($userLoggedIn);

            // Redirect to 'kanavuhome' after successful login
            redirect(base_url('kanavuhome'));

        } else {
            // If login fails, reload the login page with an error message
            $this->load->view('login.php');
            echo '<script>alert("Please enter registered credentials.");</script>';
        }
    }
    public function individualform_data()
    {
        // Retrieve form data
        $data['category'] = $this->input->post('category'); // Correct field name
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['beneficiary_name'] = $this->input->post('beneficiary_name');
        $data['beneficiary_age'] = $this->input->post('beneficiary_age');
        $data['location'] = $this->input->post('location');
        $data['beneficiary_phone'] = $this->input->post('beneficiary_phone');
        $data['form_option'] = $this->input->post('form_option'); // Make sure this field is correct as well
        $data['amount'] = $this->input->post('amount');
        $data['end_date'] = $this->input->post('end_date');
        $data['cause_heading'] = $this->input->post('cause_heading');
        $data['cause_description'] = $this->input->post('cause_description');

        // Handle file upload
        $this->load->library('upload');
        $config['upload_path'] = './assets/individualform_img/';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = 1024;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('cover_image')) {
            $error = $this->upload->display_errors();
            echo "Upload error: $error";
            redirect('kanavuhelp/individual', 'refresh');
        } else {
            // File upload success
            $file_data = $this->upload->data();
            $file_name = $file_data['file_name'];

            // Add file name to data array
            $data['cover_image'] = $file_name;

            // Insert data into the database
            $this->load->model('UserModel');
            $response = $this->UserModel->store3($data);

            if ($response == true) {
                echo '<script>alert("Successfully registered")</script>';
                $this->load->view('donate.php');
            } else {
                echo 'Failed to register';
            }
        }
    }

    public function charityform_data()
    {
        $data['amount'] = $this->input->post('amount');
        $data['title'] = $this->input->post('title');
        $data['ngo'] = $this->input->post('ngo');
        $data['education'] = $this->input->post('education');
        $data['employment'] = $this->input->post('employment');
        $data['aboutus'] = $this->input->post('aboutus');
        $data['city'] = $this->input->post('city');
        $data['description'] = $this->input->post('description');

        // Load upload library
        $this->load->library('upload');
        $config['upload_path'] = './assets/charityform_img/';
        $config['allowed_types'] = 'gif|jpg|png|svg|mov|mpeg|mp3|avi|mp4|gif';
        $config['max_size'] = 1024;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);

        // Check if file is uploaded successfully
        if (!$this->upload->do_upload('file')) {
            // File upload failed, handle the error
            $error = $this->upload->display_errors();
            echo "Upload error: $error"; // Debugging statement
            redirect('kanavuhelp/charity', 'refresh');
        } else {
            // File uploaded successfully, get file name and insert into database
            $file_data = $this->upload->data();
            $file_name = $file_data['file_name'];
            // echo "File uploaded successfully: $file_name"; // Debugging statement

            // Add file name to $data array
            $data['file'] = $file_name;

            // Load UserModel and call store2 method
            $this->load->model('UserModel');
            $response = $this->UserModel->store2($data);

            // Check if data is stored successfully
            if ($response == true) {
                echo '<script>alert("Successfully registered")</script>';
                $this->load->view('donate.php');
            } else {
                echo 'Failed to register';
            }
        }
    }
    public function contact_us()
	{
		$data['full-name'] = $this->input->post('full-name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['message'] = $this->input->post('message');
		$this->load->model('UserModel');
		$response = $this->UserModel->store($data);
		if ($response == true) {
			echo '<script>alert("Succesfully registered")</script>';
			$this->load->view('donate.php');

		} else {
			echo 'Failed to register';
		}
	}
    public function logout()
{
    // Clear session data
    $this->session->unset_userdata('userId');
    $this->session->unset_userdata('userName');
    
    // Redirect to the login page
    redirect(base_url('/login'));
}

}
