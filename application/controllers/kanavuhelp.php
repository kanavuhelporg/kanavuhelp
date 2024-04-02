<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kanavuhelp extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
	}
	public function index()
	{
		$this->load->view('kanavuhome.php');
	}
	public function homepage()
	{
		$this->load->view('kanavuhome.php');
	}
	public function login()
	{
		$this->load->view('login.php');
	}
	public function dummyl()
	{
		$this->load->view('dummy.php');
	}
	public function startahelp()
	{
		$this->load->view('startahelp.php');
	}
	public function register()
	{
		$this->load->view('register.php');
	}
	public function donate()
	{
		$this->load->view('donate.php');
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
	public function individual()
	{
		$this->load->view('individual.php');
	} 
	public function charity()
	{
		$this->load->view('charity.php');
	}
	public function abouts()
	{
		$this->load->view('abouts.php');
	}
	

	public function submit_form()
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
        redirect('kanavuhelp/individual', 'refresh');
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

public function individualform_data()
{
    // Retrieve form data
    $data['form-select'] = $this->input->post('form-select');
    $data['name'] = $this->input->post('name');
    $data['email'] = $this->input->post('email');
    $data['phone'] = $this->input->post('phone');
    $data['beneficiary_name'] = $this->input->post('beneficiary_name');
    $data['beneficiary_age'] = $this->input->post('beneficiary_age');
    $data['location'] = $this->input->post('location');
    $data['beneficiary_phone'] = $this->input->post('beneficiary_phone');
    $data['form-option'] = $this->input->post('form-option');
    $data['amount'] = $this->input->post('amount');
    $data['end_date'] = $this->input->post('end_date');
    $data['cause-heading'] = $this->input->post('cause-heading');
    $data['cause-description'] = $this->input->post('cause-description');
    
    // Upload file
	$this->load->library('upload');
    $config['upload_path'] = './assets/charityform_img/';
    $config['allowed_types'] = 'gif|jpg|png|svg';
    $config['max_size'] = 1024;
    $config['max_width'] = 1024;
    $config['max_height'] = 768;
    $this->upload->initialize($config);

    // Check if file is uploaded successfully
    if (!$this->upload->do_upload('cover_image')) {
        // File upload failed, handle the error
        $error = $this->upload->display_errors();
        echo "Upload error: $error"; // Debugging statement
        redirect('kanavuhelp/individual', 'refresh');
    } else {
        // File uploaded successfully, get file name and insert into database
        $file_data = $this->upload->data();
        $file_name = $file_data['file_name'];
        // echo "File uploaded successfully: $file_name"; // Debugging statement

        // Add file name to $data array
        $data['cover_image'] = $file_name;
        // Load model and insert data into the database
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



public function userLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->UserModel->loginUser();
        if (isset($login[0]['id'])) {
            $userLoggedIn = array(
                'userId' => $login[0]['id'],
                'userName' => $login[0]['name'],
            );
            $this->session->set_userdata($userLoggedIn);
			// $this->index();
			$response = $this->UserModel->loginUser();
		if ($response == true) {
			echo '<script>alert("Login Succesfully")</script>';
			// $this->homepage();
			// $this->load->view('kanavuhome.php');
			// $this->load->view('individual.php');
			$this->load->view('donate.php'); 	 
		} else {
			echo 'Failed to register';
		}

			
			
        } else {
            $this->load->view('login.php', $this->data);
            echo '<script>alert("Please enter registered mobile number.");</script>';
        }
    }

	public function submit1()
	{
		$data['name'] = $this->input->post('exampleInputName');
		$data['email'] = $this->input->post('exampleInputEmail1');
		$data['password'] = $this->input->post('exampleInputPassword1');
		$this->load->model('UserModel');
		$response = $this->UserModel->store1($data);
		if ($response == true) {
			echo '<script>alert("Succesfully registered")</script>';
			$this->login();

		} else {
			echo 'Failed to register';
		}
	}

}

?>